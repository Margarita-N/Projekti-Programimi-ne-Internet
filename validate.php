<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $remember=$_POST['remember'];
    
    if($email=="" || $password==""){
        echo '<span class="red">All fields must be filled!</span>';
    }
    ?>
