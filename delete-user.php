<?php
require("db/dbconfig.php");

$conn=new mysqli(serverName,username,password,dbname);

if(isset($_GET['id'])){
    $ID=$_GET['id'];
    $deleteQuery="DELETE from perdoruesit WHERE userID=$ID";
    $rezultati=mysqli_query($conn,$deleteQuery);
    if(!$rezultati){
        ?><script>alert("Nuk mund te fshihen te dhenat!")</script>
        <?php
        header("Location:users_AdminPage.php");
    }
    else{
        ?>
        <script>alert("Perdoruesi eshte fshire!")</script>
        <?php
        header("Location:users_AdminPage.php");
    }
}
?>