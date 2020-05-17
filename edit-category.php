<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(!isset($_SESSION['user']))
    {   
header('location:index.php');
}
else{ 


if(isset($_POST['update']))
{
$category=$_POST['category'];
$status=$_POST['status'];
$catid=intval($_GET['catid']);
$sql="update  kategorite set kategoriName=:category,Statusi=:status where kategoriID=:catid";
$query = $dbh->prepare($sql);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':catid',$catid,PDO::PARAM_STR);
$query->execute();
$_SESSION['updatemsg']="Me sukses u ruajten ndryshimet";
header('location:manage-categories.php');
}

?>
<!DOCTYPE html>
<html >
 <head>
        <title>Editimi i kategorive</title>
        <link href="css/AdminStyle.css" rel="stylesheet"/>
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/all.min.css" rel="stylesheet"/>
        <script src="css/all.min.js"></script>
    </head>
<body>
<div class="center-body">
 <?php include('AdminHeader.php');?>

</br>
</br>
<div class="content-table">
<form method="post">
<?php 
$catid=intval($_GET['catid']);
$sql="SELECT * from kategorite where kategoriID=:catid";
$query=$dbh->prepare($sql);
$query-> bindParam(':catid',$catid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{               
  ?> 
<div class="form-group">
<label>Emri i Kategorise: </label>
</br>
<input class="form-control" type="text" name="category" value="<?php echo htmlentities($result->kategoriName);?>" required />
</div>
<div class="form-group">
<label>Statusi: </label>
<?php if($result->Statusi==1) {?>
 <div class="radio">
<label>
<input type="radio" name="status" id="status" value="1" checked="checked">Aktive
</label>
</div>
<div class="radio">
<label>
<input type="radio" name="status" id="status" value="0">Joaktive
</label>
</div>
<?php } else { ?>
<div class="radio">
<label>
<input type="radio" name="status" id="status" value="0" checked="checked">Joaktive
</label>
</div>
 <div class="radio">
<label>
<input type="radio" name="status" id="status" value="1">Aktive
</label>
</div
<?php } ?>
</div>
<?php }} ?>
<button type="submit" name="update" >Update </button>

                 </form>
             </div>
        </div>
</div>
</body>
</html>
<?php } ?>
