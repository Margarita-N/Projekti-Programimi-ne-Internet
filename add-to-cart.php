<?php
session_start();
require("db/dbconfig.php");
require("reusable/product-class.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_SESSION['user'])){
        $id=$_POST['id'];
        $conn=new mysqli(serverName,username,password,dbname);
        $query='SELECT * FROM librat WHERE bookID='.$id;
        $resultArray=mysqli_query($conn,$query);
    
        while($result=$resultArray->fetch_assoc()){
            $stock=$result['stock'];
            $bookName=$result['bookName'];
            $price=$result['price'];
            $path=$result['fotoPath'];
        }
