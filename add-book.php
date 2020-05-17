<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(!isset($_SESSION['user']))
    {   
header('location:index.php');
}
else{ 

if(isset($_POST['add']))
{
$bookname=$_POST['bookname'];
$author=$_POST['author'];
$price=$_POST['price'];
$shtepiabotuese=$_POST['shtepiabotuese'];
$nrfaqeve=$_POST['nrfaqeve'];
$permbajtja=$_POST['permbajtja'];
$fotoPath=$_POST['fotoPath'];
$rating=$_POST['range'];
$stock=$_POST['stock'];
$Kategoria=$_POST['Kategoria'];

$sql="INSERT INTO  librat(bookName,author,price,shtepiaBotuese,numriFaqeve,permbajtja,fotoPath,rating,stock,Kategoria)
VALUES(:bookName,:author,:price,:shtepiaBotuese,:numriFaqeve,:permbajtja,:fotoPath,:rating,:stock,:Kategoria)";
$query = $dbh->prepare($sql);
$query->bindParam(':bookName',$bookname,PDO::PARAM_STR);
$query->bindParam(':author',$author,PDO::PARAM_STR);
$query->bindParam(':price',$price,PDO::PARAM_STR);
$query->bindParam(':shtepiaBotuese',$shtepiabotuese,PDO::PARAM_STR);
$query->bindParam(':numriFaqeve',$nrfaqeve,PDO::PARAM_STR);
$query->bindParam(':permbajtja',$permbajtja,PDO::PARAM_STR);
$query->bindParam(':fotoPath',$fotoPath,PDO::PARAM_STR);
$query->bindParam(':rating',$rating,PDO::PARAM_STR);
$query->bindParam(':stock',$stock,PDO::PARAM_STR);
$query->bindParam(':Kategoria',$Kategoria,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Librat u shtuan me sukses";
header('location:manage-books.php');
}
else 
{
$_SESSION['error']="Ka gabime. Provo perseri";
header('location:manage-books.php');
}

}
?>
<!DOCTYPE html>
<html>
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
                <h4 class="header-line">Shto Libra</h4>
                
                            </div>

</div>
<br>
<br>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
<div class="panel panel-info">
<div class="panel-heading">
Informata rreth Librave
</div>
<div class="panel-body">
<form role="form" method="post">
<div class="form-group">
<label>Emri i librit<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="bookname" autocomplete="off"  required />
</div>

<div class="form-group">
<label>Kategoria <span style="color:red;">*</span></label>
<select class="form-control" name="Kategoria" required="required">
<option value="">Zgjedh kategorine </option>
<?php 
$status=1;
$sql = "SELECT * from  kategorite where Statusi=:status";
$query = $dbh -> prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->kategoriID);?>"><?php echo htmlentities($result->kategoriName);?></option>
 <?php }} ?> 
</select>
</div>
<div class="form-group">
<label>Autori <span style="color:red;">*</span></label>
<input class="form-control" type="text" name="author"  required="required" autocomplete="off"  />
</div>

<div class="form-group">
<label>Shtepia Botuese<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="shtepiabotuese"  required="required" autocomplete="off"  />
</div>

<div class="form-group">
<label>Numri i Faqeve<span style="color:red;">*</span></label>
<input class="form-control" type="text" name="nrfaqeve"  required="required" autocomplete="off"  />
</div>

<div class="form-group">
<label>Permbajtja <span style="color:red;">*</span></label>
<input class="form-control" type="text" name="permbajtja"  required="required" autocomplete="off"  />
</div>

<div class="form-group">
<label>Foto Path</label>
<input class="form-control" type="text" name="fotoPath"  required="required" autocomplete="off"  />
</div>

<div class="form-group">
<label>Stock </label>
<input class="form-control" type="text" name="stock"  required="required" autocomplete="off"  />
</div>

<div class="form-group">
<label>Range </label>
<input class="form-control" type="number" id="quantity" name="range" min="1" max="30">
</div>

 <div class="form-group">
 <label>Price<span style="color:red;">*</span></label>
 <input class="form-control" type="text" name="price" autocomplete="off"   required="required" />
 </div>
<button type="submit" name="add" class="btn btn-info">Shto librin </button>

                                   </form>
                          </div>
                   </div>
             </div>

        </div>
   
    </div>
    </div>
</body>
</html>
<?php } ?>
