<html>
    <head>
        <title>Manage Users</title>
        <link href="css/AdminStyle.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/all.min.css" rel="stylesheet"/>
        <script src="css/all.min.js"></script>
    </head>
    <body>
    <style>
        <?php
        readfile("css/AdminStyle.css");
        ?>
    </style>
    <div class="center-body">
        <?php require("AdminHeader.php");
              require("db/dbconfig.php");
              //Add a search bar to search by name and refresh by ajax
              ?>
        
        <table class="content-table" style="">
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Data e antaresimit</th>
                <th>Email</th>
                <th>Gjinia</th>
                <th>Qyteti</th>
                <th>Shteti</th>
                <th>Ditelindja</th>
                <th>Edit User</th>
                <th>Delete User</th>
            </tr>
