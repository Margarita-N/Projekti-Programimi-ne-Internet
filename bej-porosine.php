<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    require("db/dbconfig.php");
    require("reusable/user-class.php");
    require("reusable/product-class.php");
    require("reusable/porosi-class.php");
    require("reusable/custom-exception-class.php");

    session_start();

    $conn=new mysqli(serverName,username,password,dbname);

    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $numri=$_POST['numri'];
    $shteti=$_POST['shteti'];
    $adresa=$_POST['adresa'];
    $qyteti=$_POST['qyteti'];
    $pagesa=$_POST['pagesa'];

    if($emri=="" || $mbiemri=="" || $numri=="" || $shteti=="" || $adresa=="" || $qyteti==""){
        echo "Te gjitha fushat duhet te plotesohen!";
    }
    else{
        try{
            if(isset($_SESSION['user'])){
                $userID=$_SESSION['user']->getId();
                if(isset($_SESSION['cart'])){
                    $porosia=new porosia($userID,$emri,$mbiemri,$numri,$adresa,$shteti,$qyteti);
    
                    $porosiID=$porosia->createOrder($conn,$pagesa);
    
                    for($i=0;$i<sizeof($_SESSION['cart']);$i++){
                        $product=$_SESSION['cart'][$i];
                        $porosia->setBookId($product->getID());
                        $porosia->setQuantity($product->getQuantity());
    
                        $porosia->decrementStock($conn);
                        $porosia->detailedOrder($conn,$porosiID);
    
                    }
    
                    unset($_SESSION['cart']);
                    echo 'Porosia eshte bere me sukses!';
                }
                else{
                    throw new noOrderException();
                }
            }
            else{
                throw new noOrderException();
            }
        }catch(noOrderException $e){
            echo $e->errorMessage();
        }
        
        
    }
}

?>