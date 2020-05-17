<?php
session_start();

$id=$_GET['id'];

if(isset($_SESSION['cart'])){
    array_splice($_SESSION['cart'],$id,1);
    echo 'U Largua';
}

?>
<script>window.location.assign("cart.php");</script>