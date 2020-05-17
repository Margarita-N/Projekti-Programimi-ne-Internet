<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(!isset($_SESSION['user']))
    {   
header('location:index.php');
}
else{ 

if(isset($_POST['create']))
{
$category=$_POST['category'];
$status=$_POST['status'];
$sql="INSERT INTO  kategorite(kategoriName,Statusi) VALUES(:category,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="U ruajten te dhenat me sukses.";
header('location:manage-categories.php');
}
else 
{
$_SESSION['error']="Diqka shkoj keq.Provoni prap.";
header('location:manage-categories.php');
}

}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
	    <title>Shto kategorite</title>
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
        <?php require("AdminHeader.php");?>
		</br>
		</br>
		
            <div class="col-md-12">
                
                            </div>
				</br>
				</br>
				</br>

<div class="panel-body">
<form method="post">
<div class="form-group">
<label>Emri i kategorise: </label>
</br>
<input class="form-control" type="text" name="category" autocomplete="off" required />
</div>
<div class="form-group">
<label>Statusi: </label>
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

</div>
<button type="submit" name="create" class="btn btn-info">Shto Kategorine </button>

                                    </form>
                            </div>
                     </div>
                </div>

   
</body>
</html>
<?php } ?>
