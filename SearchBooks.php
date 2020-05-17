<?php
require("db/dbconfig.php");

$conn=new mysqli(serverName,username,password,dbname);

$selectQuery='SELECT * FROM librat';
$resultArray=mysqli_query($conn,$selectQuery);

$text=$_GET['name'];

$results=array();
while($result=$resultArray->fetch_assoc()){
    if(preg_match('/'.strtolower($text).'/',strtolower($result['bookName']))){
        array_push($results,'<a href="libri.php?bookId='.$result['bookID'].'">'.$result['bookName'].'</a>');
    }
}
//sort($results);
if(strlen($text)==0){
    echo '';
}
elseif(strlen($text)>0 && $results==''){
    echo 'No results found';
}
else{
    $books='';
    foreach($results as $rezultati){
        $books=$books.$rezultati.'<br>';
    }
    echo $books;
}


?>