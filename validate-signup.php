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
  }
  ?>
