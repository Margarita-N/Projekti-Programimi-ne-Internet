<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $remember=$_POST['remember'];
    
    if($email=="" || $password==""){
        echo '<span class="red">All fields must be filled!</span>';
    }
    else{
    require("db/dbconfig.php");
    $conn=new mysqli(serverName,username,password,dbname);
    

    $stmt=$conn->prepare("SELECT * FROM perdoruesit WHERE email=? and passwordi=?");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();

    $result = $stmt->get_result();
    $resultset=$result->fetch_all(MYSQLI_ASSOC);
         
        if(sizeof($resultset)>0){
        echo 'You are logged in!';
        if($remember==1){
            //vendos cookie per te mbajtur mend perdoruesin
        }
    }
    else{
        echo 'Email or password are incorrect!';
    }
}
}
    ?>
