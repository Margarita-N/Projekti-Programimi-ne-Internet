<?php

require_once ('db/dbconfig.php');
require_once ('reusable/component.php');
require_once ('reusable/user-class.php');
session_start();



?>
<!doctype html>
<html lang="zxx">

<head>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/search-books.js"></script>
    <style>
        body{
            overflow-x:hidden;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".cart-items").submit(function(event){
                event.preventDefault();
                var product_id=$("#product_id").val();

                $.ajax({
                    url: "add-to-cart.php",
                    data:{id:product_id},
                    type:'POST',
                    success: function(result){
                            alert("Produkti u shtua ne shporte!");
                    }});
                
            })
        })

    </script>
</head>

<body>
    <!--::header part start::-->
    <?php require("header.php"); ?>
    <!-- Header part end-->
    
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_slider">
                        <div class="single_banner_slider">
                            <div class="banner_text">
                                <div class="banner_text_iner">
                                    <h5>Platforme online per shitjen e librave</h5>
                                    <h1>So many books,so little time...</h1>
                                   
                           </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  

    <!-- banner part start-->
    


    <!-- feature_part start-->
        <!-- feature_part start-->
        <section class="feature_part pt-4">
            <div class="container-fluid p-lg-0 overflow-hidden">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_feature_post_text">
                            <div class="img-resize" style="text-align: center;margin-left: 50px;margin-top: 30px;"><img src="img/Shitesi i kepucave.jpg" alt="#"></div>
                            <h3 style="font-family: fantasy;margin-left: 120px;">LIBRI ME I SHITUR</h3>
                            <p style="font-size: medium;text-align: center;margin-left: 20px;margin-right: 20px;"><strong>SHITESI I KEPUCEVE</strong>,një sagë e mrekullueshme e inovacionit, mbijetesës, dhe triumfit e themeluesit të kompanisë Nike.Një rrëfim epik për dështimin e triumfine,besimin dhe suksesin fituar me mund dhe dashurinë...</p>    
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_feature_post_text">
                            <div class="img-resize" style="text-align: center;margin-left: 50px;margin-top: 30px;"><img src="img/Michelle.jpg" alt="#"></div>
                            <h3 style="font-family: fantasy;margin-left: 120px;">AUTORI I PREFERUAR</h3>
                            <p style="font-size: medium;text-align: center;margin-left: 20px;margin-right: 20px;"><strong>MICHELLE OBAMA</strong>,autorja amerikane,dikur zonja e pare e SHBA eshte votuar e preferuara jone.E kete epitet e ka fituar me botimin e librit te saj BestSeller "BECOMING",nje liber mjaft i fuqishem dhe inspirues per te zbuluar zerin brenda teje</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_feature_post_text">
                            <div class="img-resize" style="text-align: center;margin-left: 50px;margin-top:30px;"><img src="img/Libri i ri.jpg" alt="#"></div>
                            <h3 style="font-family: fantasy;margin-left: 120px;">BOTIMI ME I RI</h3>
                            <p style="font-size: medium;text-align: center;margin-left: 20px;margin-right: 30px;"><strong>THE WEDDING DRESS</strong>,libri i botuar nga Danielle Steel me 28 Prill 2020,nje novele e re,jeta e kater gjeneratave te gruas se nje familje.Botimi me i ri tani mund ta bleni edhe ne faqen tone...</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- upcoming_event part start-->

    <!-- new arrival part here -->
    <section class="new_arrival section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="arrival_tittle">
                        <h2 style="margin-left: 300px;">FILLO UDHETIMIN</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="new_arrival_iner filter-container">
                        <div class="row align-items-center justify-content-between" style="margin-left:auto;margin-right:auto">
                            <?php
                                $result = getData();
                                while ($row = mysqli_fetch_assoc($result)){
                                    component( $row['bookName'],$row['price'],$row['fotoPath'],$row['bookID']);
                                }
                            ?>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- new arrival part end -->

    <!-- free shipping here -->
    <section class="shipping_details section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_2.png" alt="">
                        <h4>Blej libra,fito zbritje</h4>
                        <p>Faqja BiblioTech ua mundëson blerjen e librave online me një click.Ne sigurisht se mendojme per ju qe bleni libra me shpesh dhe ofrojme zbritje ne cmim.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_1.png" alt="">
                        <h4>Transporti</h4>
                        <p>Mjafton te paguani cmimin e librit, per transport mos u shqetesoni!!Ju vie ne shtepi pa pagese shtese.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_3.png" alt="">
                        <h4>Pagesa</h4>
                        <p>Ne ofrojme mundesine e pageses me kartele te ciles do banke cofte ajo lokale apo nderkombtare</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_shopping_details">
                        <img src="img/icon/icon_4.png" alt="">
                        <h4>Asistenca</h4>
                        <p>Per cdo paqartesi cofte ajo ne lidhje me porosine e librave apo edhe tjeter mund te telefononi ne cdo kohe.Ne ofrojme asistence 24/7.Per infot e kontaktit shtypni butonin Kontakti ne menu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- free shipping end -->

    <!-- subscribe_area part start-->
    <section class="instagram_photo">
       <!-- <div class="container-fluid>-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_photo_iner">
                        <div class="single_instgram_photo">
                            <img src="img/libraria1.jpg" alt="">
                            
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/libraria2.jpeg" alt="">
                            
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/libraria3.jpg" alt="">
                            
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/libraria4.jpg" alt="">
                             
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/libraria5.jpg" alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <?php require('footer.php'); ?>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

      

</body>

</html>
