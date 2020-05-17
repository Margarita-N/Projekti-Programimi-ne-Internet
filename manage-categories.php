<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(!isset($_SESSION['user']))
{   
header('location:index.php');
}
else{ 
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from kategorite  WHERE kategoriID=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$_SESSION['delmsg']="Kategoria u fshi me sukses .";
header('location:manage-categories.php');

}
    ?>
<!DOCTYPE html>
<html>
 <head>
        <title>Manage</title>
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
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kategorite</th>
                                            <th>Statusi</th>
                                            <th>Edit</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php $sql = "SELECT * from  kategorite";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                      
                                        <tr >
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result->kategoriName);?></td>
                                            <td class="center"><?php if($result->Statusi==1) {?>
                                            <a href="#" >Aktive</a>
                                            <?php } else {?>
                                            <a href="#" >Joaktive</a>
                                            <?php } ?></td>
                                            <td class="center"><a href="edit-category.php?catid=<?php echo htmlentities($result->kategoriID);?>"> Edit</a></td> 
                                          <td class="center"><a href="manage-categories.php?del=<?php echo htmlentities($result->kategoriID);?>" onclick="return confirm('Are you sure you want to delete?');"" >Delete</a></td>
                                            </td>
                                        </tr>
										
                         <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                        
</body>
</html>
<?php } ?>
