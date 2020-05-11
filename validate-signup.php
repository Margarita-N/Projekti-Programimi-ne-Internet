<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require("db/dbconfig.php");
        $conn=new mysqli(serverName,username,password,dbname);

        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];
        $gender=$_POST['gender'];
        $state=$_POST['state'];

        $passwordLength=strlen($password);
        if($username=="" || $email=="" || $password=="" || $confirmPassword==""){
            echo '<span class="red">All fields must be filled!</span>'.$passwordLength;
        }
        else{
            $stmt=$conn->prepare("SELECT * FROM perdoruesit WHERE email=?");
            $stmt->bind_param("s",$email);
            $stmt->execute();

            $result = $stmt->get_result();
            $resultset=$result->fetch_all(MYSQLI_ASSOC);
            if(sizeof($resultset)>0){
                echo '<span class="red">Email i dhene eshte i regjistruar ne nje account!</span>';
            }
            elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                echo '<span class="red">Email is not valid!</span>';
            }
  }
  ?>
