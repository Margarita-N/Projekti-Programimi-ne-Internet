<html>
    <head>
        <title>Edit User</title>
        <link href="css/AdminStyle.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/all.min.css" rel="stylesheet"/>
        <script src="css/all.min.js"></script>
    </head>
    <body>
        <style>
            <?php readfile("css/AdminStyle.css")?>
            .content-table{
                width:50%;
            }
        </style>
        <div class="center-body">
        <?php require("db/dbconfig.php");
              require("AdminHeader.php");

              if(isset($_GET['id'])){
                $ID=$_GET['id'];

                $conn=new mysqli(serverName,username,password,dbname);
                $selectionQuery="SELECT * FROM perdoruesit where userID=$ID";
                $resultArray=mysqli_query($conn,$selectionQuery);
                $result=$resultArray->fetch_assoc();

                echo '<div class="content-table"><form method="post" action="<?php $_PHP_SELF ?>" name="editUser"><table>
                    <tr>
                        <td><label>Username</label><td>
                        <td><input type="text" name="username" value="'.$result['username'].'"/></td>
                    </tr>
                    <tr>
                        <td><label>Password</label><td>
                        <td><input type="text" name="password" value="'.$result['passwordi'].'"/></td>
                    </tr>
                    <tr>
                        <td><label>Email</label><td>
                        <td><input type="text" name="email" value="'.$result['email'].'"/></td>
                    </tr>
                    <tr>
                        <td><label>Qyteti</label><td>
                        <td><input type="text" name="qyteti" value="'.$result['qyteti'].'"/></td>
                    </tr>
                    <tr>
                        <td><label>Shteti</label><td>
                        <td><input type="text" name="shteti" value="'.$result['shteti'].'"/></td>
                    </tr>
                    <tr>
                        <td colspan=2><input type="submit" name="submitBtn" value="Edit"/><td>
                    </tr>
                    </table>
                    </form></div>';

                    if(isset($_POST['submitBtn'])){
                        $username=$_POST['username'];
                        $password=$_POST['password'];
                        $email=$_POST['email'];
                        $qyteti=$_POST['qyteti'];
                        $shteti=$_POST['shteti'];
      
                        $query="UPDATE perdoruesit SET username='$username', passwordi='$password', email='$email', qyteti='$qyteti', shteti='$shteti' where userID=$ID";
                        $editquery=mysqli_query($conn,$query);
                    }
              }

              
             
              ?>
        </div>
        <?php mysqli_close($conn);?>
    </body>
</html>
