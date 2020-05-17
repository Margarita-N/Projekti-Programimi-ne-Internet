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
                <th>Shteti</th>
                <th>Edit User</th>
                <th>Delete User</th>
            </tr>
            <?php 
            function define_gender(string $var){
                if($var=="F"){
                    return "Femer";
                }
                else if($var=="M"){
                    return "Mashkull";
                }
                else{
                    return;
                }
            }

            $conn=new mysqli(serverName,username,password,dbname);
            if(!$conn){
                die("Connection failed:". mysqli_error_message());
            }

            $query="SELECT * FROM perdoruesit";
            $resultArray=mysqli_query($conn,$query);
            while($result=$resultArray->fetch_assoc()){
                echo '<tr><td>'.$result['userID'].'</td>'
                    .'<td>'.$result['username'].'</td>'
                    .'<td>'.$result['antaresimi'].'</td>'
                    .'<td>'.$result['email'].'</td>'
                    .'<td>'.define_gender($result['gjinia']).'</td>'
                    .'<td>'.$result['shteti'].'</td>'
                    .'<td><a href="edit-user.php?id='.$result['userID'].'">Edit</a></td>'
                    .'<td><a href="delete-user.php?id='.$result['userID'].'">Delete</a></td>';
            }
            ?>
        </table>

    </div>
    <?php mysqli_close($conn);?>
    </body>
</html>
