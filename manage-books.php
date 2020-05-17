<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from librat  WHERE bookID=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$_SESSION['delmsg']="Category deleted scuccessfully ";
header('location:manage-books.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title></title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
	<link href="css/style.css" rel="stylesheet"/>
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
      <!------MENU SECTION START-->
<?php include('AdminHeader.php');?>
<style><?php readfile("css/AdminStyle.css");?></style>
<!-- MENU SECTION END-->
      <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
			<br>
			<br>
			</br>
			</br>
                <h4 class="header-line">Manage Books</h4>
    </div>
     <div class="row">
    <?php if($_SESSION['error']!="")
    {?>
<div class="col-md-12">
<div class="alert alert-danger" >
 <strong>Error :</strong> 
 <?php echo htmlentities($_SESSION['error']);?>
<?php echo htmlentities($_SESSION['error']="");?>
</div>
</div>
<?php } ?>
<?php if($_SESSION['msg']!="")
{?>
<div class="col-md-12">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['msg']);?>
<?php echo htmlentities($_SESSION['msg']="");?>
</div>
</div>
<?php } ?>
<?php if($_SESSION['updatemsg']!="")
{?>
<div class="col-md-12">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['updatemsg']);?>
<?php echo htmlentities($_SESSION['updatemsg']="");?>
</div>
</div>
<?php } ?>


   <?php if($_SESSION['delmsg']!="")
    {?>
<div class="col-md-12">
<div class="alert alert-success" >
 <strong>Success :</strong> 
 <?php echo htmlentities($_SESSION['delmsg']);?>
<?php echo htmlentities($_SESSION['delmsg']="");?>
</div>
</div>
<?php } ?>

</div>


        </div>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                
                        </div>
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Emri i librit</th>
											<th>Autori</th>
											<th>Cmimi</th>
                                            <th>Shtepia Botuese</th>
                                            <th>Numri i Faqeve</th>
                                            <th>Foto Path</th>
											<th>Rating</th>
											<th>Stock</th>
										    <th>Kategoria</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
<?php 
$page=$_GET["page"];
if($page==""|| $page=="1")
{
	$page1=0; 
}
else
{
	$page1=($page*5)-5;
}
$sql = "SELECT librat.bookName,librat.Kategoria,librat.author,librat.price,librat.shtepiaBotuese,librat.numriFaqeve,librat.fotoPath,librat.rating,librat.stock,librat.bookID from librat limit $page1,5";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>                                      
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo htmlentities($cnt);?></td>
                                            <td class="center"><?php echo htmlentities($result->bookName);?></td>
                                            <td class="center"><?php echo htmlentities($result->author);?></td>
											<td class="center"><?php echo htmlentities($result->price);?></td>
											<td class="center"><?php echo htmlentities($result->shtepiaBotuese);?></td>
											<td class="center"><?php echo htmlentities($result->numriFaqeve);?></td>
                                            <td class="center"><?php echo htmlentities($result->fotoPath);?></td>
                                            <td class="center"><?php echo htmlentities($result->rating);?></td>
                                            <td class="center"><?php echo htmlentities($result->stock);?></td>
                                            <td class="center"><?php echo htmlentities($result->Kategoria);?></td>
                                            <td class="center">
											
                                            <a href="edit-books.php?bookID=<?php echo htmlentities($result->bookID);?>"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button> 
                                          <a href="manage-books.php?del=<?php echo htmlentities($result->bookID);?>" onclick="return confirm('Are you sure you want to delete?');"" >  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
                                            </td>
                                        </tr>
       <?php $cnt=$cnt+1;}} ?>                                      
                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!--End Advanced Tables -->
<div style="padding-left:1080px;">
<?php
$sql = "SELECT * from  librat";
$query = $dbh -> prepare($sql);
$query->execute();
	?>
    </div>
    </div>

</body>
</html>
<?php } ?>
