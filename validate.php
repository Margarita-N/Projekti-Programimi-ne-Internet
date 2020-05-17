<?php
session_start();
require("reusable/user-class.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $remember=$_POST['remember'];
    
    if($email=="" || $password==""){
        echo '<span class="red">Te gjitha fushat duhet te plotesohen!</span>';
    }
    else{
    require("db/dbconfig.php");
    $conn=new mysqli(serverName,username,password,dbname);
    
    $hashedPass=md5($password);
    $stmt=$conn->prepare("SELECT * FROM perdoruesit WHERE email=? and passwordi=?");
    $stmt->bind_param("ss",$email,$hashedPass);
    $stmt->execute();

    $result = $stmt->get_result();
    $resultset=$result->fetch_all(MYSQLI_ASSOC);

    if(sizeof($resultset)>0){
        
        $query='SELECT * FROM perdoruesit WHERE email="'.$email.'"';
        $rowSet=mysqli_query($conn,$query);
        while($row=$rowSet->fetch_assoc()){
            $id=$row['userID'];
            $username=$row['username'];
            $statusi=$row['statusi'];
        }

        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }

        $loggedInUser=new user($id,$username,$password,$email,$statusi);
        $_SESSION['user']=$loggedInUser;
        if($statusi=='admin'){
            echo 'Tani jeni i kyqur!<script>window.location.assign("AdminMain.php");</script>';
        }
        else{
            echo 'Tani jeni i kyqur!<script>history.go(-1);</script>';
        }
        if($remember==1){
            if(isset($_COOKIE['rememberedUser'])){
                setcookie('rememberedUser',time()-(86400*30));
            }

            setcookie('rememberedUser',serialize($loggedInUser),time()+(86400*30));
        }
    }
    else{
        echo 'Email ose password jane gabim!';
    }
}
}
?>
