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
$bookName=$_POST['bookName'];
$author=$_POST['author'];
$price=$_POST['price'];
$shtepiabotuese=$_POST['shtepiabotuese'];
$numriFaqeve=$_POST['numriFaqeve'];
$permbajtja=$_POST['permbajtja'];
$fotoPath=$_POST['fotoPath'];
$rating=$_POST['range'];
$stock=$_POST['stock'];
$Kategoria=$_POST['Kategoria'];
$bookID=intval($_GET['bookID']);

$sql="UPDATE librat SET bookName=:bookName,author=:author,price=:price,shtepiaBotuese=:shtepiabotuese,numriFaqeve=:numriFaqeve,permbajtja=:permbajtja,fotoPath=:fotoPath,rating=:rating,stock=:stock,Kategoria=:Kategoria where bookID=:bookID";
$query = $dbh->prepare($sql);
$query->bindParam(':bookName',$bookName,PDO::PARAM_STR);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':shtepiabotuese',$shtepiabotuese,PDO::PARAM_STR);
$query->bindParam(':numriFaqeve',$numriFaqeve,PDO::PARAM_STR);
$query->bindParam(':permbajtja',$permbajtja,PDO::PARAM_STR);
$query->bindParam(':fotoPath',$fotoPath,PDO::PARAM_STR);
$query->bindParam(':rating',$rating,PDO::PARAM_STR);
$query->bindParam(':stock',$stock,PDO::PARAM_STR);
$query->bindParam(':Kategoria',$Kategoria,PDO::PARAM_STR);
$query->bindParam(':bookID',$bookID,PDO::PARAM_STR);
$query->execute();
$_SESSION['msg']="Book info updated successfully";
header('location:manage-books.php');
}
?>
<!DOCTYPE html>
<html >
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
    <link href="css/all.min.css" rel="stylesheet"/>
    <script src="css/all.min.js"></script>
</head>
<body>
<div class="center-body">
      <!------MENU SECTION START-->
<?php include('AdminHeader.php');?>
<style><?php readfile("css/AdminStyle.css");?></style>
<!-- MENU SECTION END-->
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
			<br>
			<br>
			<br>
                <h4 class="header-line">Shto libra</h4>
                
                            </div>

</div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
<div class="panel panel-info">
<div class="panel-heading">
Book Info
</div>
<div class="panel-body">
<form role="form" method="post">
<?php 
$bookID=intval($_GET['bookID']);
$sql = "SELECT librat.bookName,librat.Kategoria,librat.author,librat.price,librat.shtepiaBotuese,librat.numriFaqeve,librat.fotoPath,librat.rating,librat.stock,librat.bookID from librat where librat.bookID=:bookID";
$query = $dbh -> prepare($sql);
$query->bindParam(':bookID',$bookID,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  

<div class="form-group">
<label>Emri i Librit<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="bookName" value="<?php echo htmlentities($result->bookName);?>" required />
</div>

<div class="form-group">
<label> Kategoria<span style="color:red;">*</span></label>
<select class="form-control" name="Kategoria" required="required" >
<option value="<?php echo htmlentities($result->Kategoria);?>"> <?php echo htmlentities($catname=$result->Kategoria);?></option>
<?php 
$status=1;
$sql1 = "SELECT * from  librat";
$query1 = $dbh -> prepare($sql1);
$query1-> bindParam(':status',$status, PDO::PARAM_STR);
$query1->execute();
$resultss=$query1->fetchAll(PDO::FETCH_OBJ);
if($query1->rowCount() > 0)
{
foreach($resultss as $row)
{           
if($catname==$row->Kategoria)
{
continue;
}
else
{
    ?>  
<option value="<?php echo htmlentities($row->Kategoria);?>"><?php echo htmlentities($row->Kategoria);?></option>
 <?php }}} ?> 
</select>
</div>


<div class="form-group">
<label> Autori<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="author" value="<?php echo htmlentities($result->author);?>"   required="required" />
</div>


<div class="form-group">
<label>Shtepia Botuese<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="shtepiabotuese" value="<?php echo htmlentities($result->shtepiaBotuese);?>" required="required" />
</div>

<div class="form-group">
<label>Numri i Faqeve<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="numriFaqeve" value="<?php echo htmlentities($result->numriFaqeve);?>" required="required"  />
</div>

<div class="form-group">
<label>Permbajtja <span style="color:red;">*</span></label>
<input class="form-control" type="text" name="permbajtja" value="<?php echo htmlentities($result->permbajtja);?>"   />
</div>

<div class="form-group">
<label>Foto Path</label>
<input class="form-control" type="text" name="fotoPath" value="<?php echo htmlentities($result->fotoPath);?>" required="required"   />
</div>

<div class="form-group">
<label>Range </label>
<input class="form-control" type="number" id="quantity" value="<?php echo htmlentities($result->rating);?>" required="required" name="range" min="1" max="30">
</div>

<div class="form-group">
<label>Stock </label>
<input class="form-control" type="text" name="stock"  value="<?php echo htmlentities($result->stock);?>" required="required"  />
</div>


 <div class="form-group">
 <label>Price<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="price" value="<?php echo htmlentities($result->price);?>" required="required" />
 </div>
 
 <?php }} ?>
<button type="submit" name="update" class="btn btn-info">Update </button>

                                </form>
                            </div>
                       </div>
                 </div>

        </div>
</body>
</div>
</html>
<?php } ?>
