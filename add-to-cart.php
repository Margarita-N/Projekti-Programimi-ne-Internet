<?php
session_start();
require("db/dbconfig.php");
require("reusable/product-class.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_SESSION['user'])){
        $id=$_POST['id'];
        $quantity=$_POST['quantity'];
        $conn=new mysqli(serverName,username,password,dbname);
        $query='SELECT * FROM librat WHERE bookID='.$id;
        $resultArray=mysqli_query($conn,$query);
    
        while($result=$resultArray->fetch_assoc()){
            $stock=$result['stock'];
            $bookName=$result['bookName'];
            $price=$result['price'];
            $path=$result['fotoPath'];
        }
        if(!(($stock-$quantity)<0)){
            $product=new product($id,$bookName,$price,$path,$quantity);
    
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart']=array();
                array_push($_SESSION['cart'],$product);
            }
            else{
                array_push($_SESSION['cart'],$product);
            }
            echo '<script>alert("Produkti u shtua ne shporte!");</script>';
        }
        else{
            echo '<script>alert("Nuk ka libra ne stock!");</script>';
        }
        
    }
    else{
        echo '<script>alert("Nuk mund te shtohet produkti ne shporte pa qene i kyqur!");</script>';
    }
    
}

?>
