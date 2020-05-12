
<?php
require ("header.php");
include ("lista.php");

//$con = mysqli_connect("localhost", "root", "", "bibliotech");

//if (mysqli_connect_errno()){
 //   echo "Failed to connect to MYSQL: ". mysqli_connect_error();
  //  exit();
//}

//foreach ($lajmi as $id => $lajm){
//    echo "<p><a href='lajmi.php?id=$id'>". $lajm['titulli']. "</a></p>";
//}
?>
<html>
<head>
    <link <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
</head>
<body>
<br/>
<br/>
<div class="container">
    <div class="row">

<?php
foreach ($lajmi as $id => $lajm) {
    echo "<div class='col-md-4' style='background-color:azure;box-sizing:border-box;padding:5%'><p align='center'><a href='libri.php?id=$id'>". $lajm['titulli']. "</a></p><p><a href='libri.php?id=$id'>". $lajm['foto']."</a></p></div>";
}
?>
    </div>
</div>
</body>
</html>