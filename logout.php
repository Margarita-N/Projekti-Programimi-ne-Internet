<?php
session_start();

if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
}
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
}

header('Location:index.php');
?>