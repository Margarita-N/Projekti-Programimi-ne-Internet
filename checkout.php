<?php
    require("reusable/product-class.php");
    require("reusable/user-class.php");
    session_start();
?>
<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pagesa</title>
    <link rel="icon" href="img/favicon.png">
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
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    #totali{
      width:100px;
      text-align:right;
      border:none;
      background-color:transparent;
    }
    #bejPorosi{
      margin:15px;
      border:none;
      border-radius:20px;
      padding:15px;
      background-color:#f76969;
      color:white;
      width:200px;
      transition:0.5s;
    }
    #bejPorosi:hover{
      background-color:#ad565a;
    }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/search-books.js"></script>
    <script>
        $(document).ready(function(){
            $("#porosiForm").submit(function(event){
                event.preventDefault();
                var emri=$("#first").val();
                var mbiemri=$("#last").val();
                var numri=$("#number").val();
                var shteti=$("#state").val();
                var adresa=$("#adresa").val();
                var qyteti=$("#city").val();
                var pagesa=$("#totali").val();

                $.ajax({
                    url: "bej-porosine.php",
                    data:{
                        emri:emri,
                        mbiemri:mbiemri,
                        numri:numri,
                        shteti:shteti,
                        adresa:adresa,
                        qyteti:qyteti,
                        pagesa:pagesa
                    },
                    type:'POST',
                    success: function(result){
                            $(".error-field").html(result);
                    }});
                
            })
        })

    </script>
</head>

<body>
    <!--::header part start::-->
    <?php require('header.php'); ?>
    <!-- Header part end-->

  <!--================Home Banner Area =================-->

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Detajet e porosise</h3>
            <p class="error-field"></p>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" placeholder="Emri"/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="name" placeholder="Mbiemri"/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" placeholder="Telefoni"/>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select" id="state">
                  <option value="Kosove">Kosove</option>
                  <option value="Shqiperi">Shqiperi</option>
                  <option value="Maqedoni">Maqedoni</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa"/>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" name="city" placeholder="Qyteti"/>
              </div>
              
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                <?php 
                    $total=0;
                    if (isset($_SESSION['cart'])){
                        for($i=0;$i<sizeof($_SESSION['cart']);$i++){
                            echo '<li>
                                 <a href="#">'.$_SESSION['cart'][$i]->getBookName().'
                                  <span class="middle">x '.$_SESSION['cart'][$i]->getQuantity().'</span>
                                  <span class="last">'.$_SESSION['cart'][$i]->getPrice().'</span>
                                 </a>
                               </li>';
                               $total=$total+($_SESSION['cart'][$i]->getPrice()*$_SESSION['cart'][$i]->getQuantity());
                        }
                        
                    }
                ?>
              </ul>
              <ul class="list list_2">
                <li>
                  <a href="#">Total
                    <span><input type='text' id='totali' value='<?php echo $total; ?>' disabled></span>
                  </a>
                </li>
              </ul>
              <div class="payment_item">
                <p>
                  <strong>Pagesa me cash</strong><br>
                  Permes faqes sone keni mundesi te beni pagese ne cash kur te mberrine porosia juaj.
                </p>
              </div>
              <form action="checkout.php" method="post" id="porosiForm">
                    <button type="submit" name="bejPorosi" id="bejPorosi">Bej porosine</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

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
</html>

