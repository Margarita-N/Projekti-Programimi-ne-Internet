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
<div class="center-body">
    <?php require("AdminHeader.php");?>

        <div class="label-tag">
            <h2>Users</h2>
            <p class="db-numbers"><?php $result1 = $users->fetch_assoc();
                    echo $result1['usercount'];?></p>
            <!--<p><i class="fas fa-users" style="color:white;font-size:30px;text-align: center;"></i></p>-->
        </div>
        <div class="label-tag">
            <h2>Books</h2>
            <p class="db-numbers"><?php $result2 = $books->fetch_assoc();
                    echo $result2['bookcount']; ?></p>
            <!--<p><i class="fas fa-book" style="color:white;font-size:30px;text-align: center;"></i></p>-->
        </div>
    <div class="label-tag">
            <h2>Categories</h2>
            <p class="db-numbers"><?php $result3=mysqli_num_rows($categories);
                                        echo $result3; ?></p>
            <!--<p><i class="fas fa-receipt" style="color:white;font-size:30px;text-align: center;"></i></p>-->
        </div>
        <div class="label-tag">
            <h2>Authors</h2>
            <p class="db-numbers"><?php $result4=mysqli_num_rows($authors);
                                        echo $result4; ?></p>
            <!--<p><i class="fas fa-receipt" style="color:white;font-size:30px;text-align: center;"></i></p>-->
        </div>
    </div>
</body>
</html>
