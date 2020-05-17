<?php
session_start();
$error = '';
$name = '';
$subject = '';
$message = '';
$emaili='';
$pw='';
function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

if(isset($_POST["submit"]))
{
 if(empty($_POST["name"]))
 {
  $error .= '<p><label class="text-danger">Ju lutem shenoni Emrin tuaj</label></p>';
 }
 else
 {
  $name = clean_text($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
   $error .= '<p><label class="text-danger">Vetem shkronjat dhe hapsira lejohen</label></p>';
  }
 }
 if(empty($_POST["emaili"]))
 {
  $error .= '<p><label class="text-danger">Ju lutem shkruani Email-in</label></p>';
 }
 else
 {
  $email = clean_text($_POST["emaili"]);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
   $error .= '<p><label class="text-danger">Formati i email-it nuk eshte ne rregull</label></p>';
  }
 }
 if(empty($_POST["subject"]))
 {
  $error .= '<p><label class="text-danger">Ju lutem shkruani subjektin</label></p>';
 }
 else
 {
  $subject = clean_text($_POST["subject"]);
 }
 if(empty($_POST["message"]))
 {
  $error .= '<p><label class="text-danger">Ju lutem shkruani mesazhin tuaj ! </label></p>';
 }
 else
 {
  $message = clean_text($_POST["message"]);
 }
if(empty($_POST["password"]))
 {
  $error .= '<p><label class="text-danger">Per dergimin e email-it duhet qe te shkruani passwordin e email-it </label></p>';
 }
else
 {
  $message = clean_text($_POST["password"]);
 }
 if($error == '')
 {//Perdorimi i klases se gatshme te ofruar nga phpmailer
  require 'class/class.phpmailer.php';
  $mail = new PHPMailer();
  $mail->IsSMTP();        //Dergimi i mesazheve duke perdorur SMTP
  $mail->Host = 'smtp.gmail.com';  //Vendosja e SMTP hostit
  $mail->Port = 587;        // Vendosja e nje vlere default te SMTP server porti  
  $mail->SMTPAuth = true;       //Vendosja e autentifikimit SMTP.Ku me pas Përdornen variablat e Username dhe Fjalëkalimit
  $mail->Username = $_POST["emaili"];     //SMTP uusernami
  $mail->Password = $_POST["password"];     //SMTP passwordi
  $mail->SMTPSecure = 'tls';       //Sigurimi i lidhjes permes tls 
  $mail->From = $_POST["emaili"];     //NE kete pjese paraqitet te marresi emaili i derguesit
  $mail->FromName = $_POST["name"];    //Ne kete pjese paraqitet te merresi emri i derguesit
  $mail->AddAddress('mihrije.kadriu@student.uni-pr.edu','Lyre.Pireva@student.uni-pr.edu','Margarita.Nasufi@student.uni-pr.edu','margarita.dibrani@student.uni-pr.edu');//Me kete pjese percaktohet se kush do te merr email-in
  $mail->WordWrap = 50;       //Vendoset numri sa karaktere mund te shkruhen ne mesazh
  $mail->IsHTML(true);       //Vendoset tipi i mesazhit    
  $mail->Subject = $_POST["subject"];    //Ne kete pjese vendoset subjekti i email-it
  $mail->Body = $_POST["message"];    //Ne kete pjese vendoset mesazhi qe po e dergojme
  if($mail->Send())        //Dergimi i emailes
  {
   $error = '<label class="text-success">Email-i është dërguar me sukses!</label>';
  }
  else
  {
   $error = '<label class="text-danger">Dërgimi i email-it ka dështuar!</label>';
  }
  $name = '';
  $subject = '';
  $message = '';
  $emaili='';
  $pw='';
 }
}

?>
<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BiblioTech</title>
    <link rel="icon" href="img/bookicon.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">

  
 </head>

 <body style="background-color:lightgray;text-align:center; background-image:url(img/img.png);background-size:contain,cover; background-repear:no-repeat" >
   
   
   <?php
    require("header.php");
    ?>
 
  <br />
  <div class="container">
   <div class="row">
    <div class="col-md-8" style="margin:0 auto; float:none;">
	</br>
  </br>
  </br>
  </br>
     <h3 align="center" style="text-align:center;color:darksalmon;font-size:50px">KONTAKTI</h3>
     <br />
     <?php echo $error; ?>
     <form method="post" style="text-align:center">
	   <div class="form-group">
       <label>Shkruaje Email-in</label>
       <input  style="font-size:20px;border-color:darksalmon;border-size:10px;;background-color:white" type="text" name="emaili" placeholder="Shkruje Email-in tuaj" class="form-control" value="<?php echo $emaili; ?>" />
      </div>
	  <div class="form-group">
       <label>Shkruaje Passwordin</label>
       <input  style="font-size:20px;border-color:darksalmon;border-size:10px;;background-color:white" type="password" name="password" placeholder="Shkruaje Passwordin" class="form-control" value="<?php echo $pw; ?>" />
      </div>
      <div class="form-group">
       <label>Shkruaje Emrin</label>
       <input  style="font-size:20px;border-color:darksalmon;border-size:10px;;background-color:white" type="text" name="name" placeholder="Shkruaje Emrin" class="form-control" value="<?php echo $name; ?>" />
      </div>	  
      <div class="form-group">
       <label>Shkruaje Subjektin</label>
       <input  style="font-size:20px;border-color:darksalmon;border-size:10px;;background-color:white" type="text" name="subject" class="form-control" placeholder="Shkruaje Subjektin" value="<?php echo $subject; ?>" />
      </div>
      <div class="form-group">
       <label>Shkruaje Mesazhin</label>
       <textarea   style="font-size:20px;border-color:darksalmon;border-size:10px;;background-color:white"name="message" class="form-control" placeholder="Shkruaje mesazhin"><?php echo $message; ?></textarea>
      </div>
      <div class="form-group" align="center">
	  </br>
       <input style="font-size:20px;" type="submit" name="submit" value="Submit" class="btn btn-info" />
      </div>
     </form>
    </div>
   </div>
  </div>
  </br>
  </br>
  </br>
  </br>
  </br>
  </br>
  <?php
require("footer.php");
?>
 </body>
</html>
