<?php
require("reusable/user-class.php");
require("db/dbconfig.php");
session_start();

$kategoria=$_GET['kategoria'];

$conn=new mysqli(serverName,username,password,dbname);
$query='SELECT * FROM librat WHERE Kategoria="'.$kategoria.'"';
$resultArray=mysqli_query($conn,$query);


?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo 'Kategoria-'.$kategoria; ?></title>
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
</head>

<body class="bg-white">
    <!--::header part start::-->
    <?php 
    require("header.php");
    ?>
    <!-- Header part end-->

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding border_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets sidebar_box_shadow">
                            <div class="l_w_title">
                                <h3>Shfletoni Kategoritë</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Biografi</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=">Ekonomi&Biznes</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Fantazi</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Filozofi&Sociologji</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Histori</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Letersi Shqiptare</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Libra per femije</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Religjioz</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Roman</a>
                                    </li>
                                    <li>
                                        <a href="category.php?kategoria=Biografi">Shkenca sociale&Psikologji</a>
                                    </li>
                                </ul>
                            </div>
                        </aside>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu product_bar_item">
                                    <h2><?php echo $kategoria;?> </h2>
                                </div>
                                <div class="product_top_bar_iner product_bar_item d-flex">
                                    
                                </div>
                            </div>
                        </div>
                        <?php 
                        while($result=$resultArray->fetch_assoc()){
                            echo '<div class="col-lg-4 col-sm-6">
                                    <div class="single_category_product">
                                        <div class="single_category_img">
                                            <a href="libri.php?bookId='.$result['bookID'].'"><img src="'.$result['fotoPath'].'" alt="Fotot e Kategorive"></a>
                                            <div class="category_product_text">
                                                <a href="single-product.html"><h5>'.$result['bookName'].'</h5></a>
                                                <p>'.$result['price'].'€</p>
                                            </div>
                                        </div>
                                    </div>
                                    </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

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
        <div class="container-fluid>
            <div class="row">
                <div class="col-lg-12">
                    <div class="instagram_photo_iner">
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_1.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_2.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_3.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_4.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                        <div class="single_instgram_photo">
                            <img src="img/instagram/inst_5.png" alt="">
                            <a href="#"><i class="ti-instagram"></i></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->

    <!--::footer_part start::-->
    <?php require("footer.php"); ?>
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
    <script src="js/price_rangs.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/contact.js"></script>
     <!-- slick js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
