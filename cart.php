<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>winter</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/price_rangs.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>.red{
        color:red;
    }</style>
    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();
                var email=$("#email").val();
                var password=$("#password").val();
                var remember=($("#f-option").prop("checked")? 1:0);
                
                if(email=="" || password==""){
                    $.ajax({
                        url: "validate.php",
                        data:{email:email,password:password,remember:remember},
                        type:'POST',
                        success: function(result){
                                $(".error-field").html(result);
                        }});
                }
                else{
                    $.ajax({
                        url: "validate.php",
                        data:{email:email,password:password,remember:remember},
                        type:'POST',
                        success: function(result){
                                $(".error-field").html(result);
                        }});
                }
            })
        })
    </script>
</head>
