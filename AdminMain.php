<html>
    <head>
        <title></title>
        <link href="css/AdminStyle.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/all.min.css" rel="stylesheet"/>
        <script src="css/all.min.js"></script>
    </head>
<body>
<style><?php readfile("css/AdminStyle.css");?></style>
    <?php

        require("db/dbconfig.php");

        $conn=new mysqli(serverName,username,password,dbname);
        if (!$conn) {  
            die("Connection failed: " . mysqli_connect_error()); 
         }

        $queryUsers="SELECT count(userID) as usercount FROM perdoruesit";
        $users=mysqli_query($conn,$queryUsers);

        $queryBooks="SELECT count(bookID) as bookcount FROM librat";
        $books=mysqli_query($conn,$queryBooks);

        $queryCategories="SELECT * FROM librat GROUP BY Kategoria";
        $categories=mysqli_query($conn,$queryCategories);

        $queryAuthors="SELECT * FROM librat GROUP BY author";
        $authors=mysqli_query($conn,$queryAuthors);
    ?>
