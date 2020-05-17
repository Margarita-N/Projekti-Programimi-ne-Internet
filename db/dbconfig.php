<?php
define("serverName","localhost");
define("dbname","bibliotech");
define("username","root");
define("password","");

function getData(){
        $sql = "SELECT bookID,bookName,price,fotoPath FROM librat where rating =3 limit 3";
        $conn=new mysqli(serverName,username,password,dbname);
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
 }
?>
