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
            elseif($password!=$confirmPassword){
                echo '<span class="red">Password dhe confirm password nuk jane te njejta!</span>';
            }
            elseif($passwordLength<8){
                echo '<span class="red">Password must be at least 8 characters long!<br></span>';
            }
            elseif(!preg_match('@[A-Z]@',$password) || !preg_match('@[a-z]@',$password) || !preg_match('@[0-9]@',$password)){
                echo '<span class="red">Password should contain a uppercase letter,lowercase letter and a digit!';
            }
  }
  ?>
