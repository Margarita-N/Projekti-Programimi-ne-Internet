<?php
require_once ("db/dbconfig.php");
require_once ("reusable/component.php");
require_once ("reusable/product-class.php");
require_once ("reusable/user-class.php");
session_start();


?>


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Shporta</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/search-books.js"></script>
  <style>
      #removeBtn{
          padding:10px;
          background-color:#f76969;
          color:white;
          border-radius:5px;
          transition:0.3s;
      }
      #removeBtn:hover{
        background-color:#ad565a;
      }
      #paguajBtn{
        background-color:#f76969;
        color:white;
        padding:10px;
        border-radius:5px;
        transition:0.5s
      }
      #paguajBtn:hover{
        background-color:#ad565a;
      }
  </style>
</head>

<body class="bg-white">
  <?php require("header.php"); ?>
  <!-- Header part end-->
  
  <div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
               
                <hr>

                <?php
                $total = 0;
                $bookCount=0;
                    if (isset($_SESSION['cart'])){
                        for($i=0;$i<sizeof($_SESSION['cart']);$i++){
                            $product=$_SESSION['cart'][$i];
                            echo "<form action=\"carti.php?action=remove&id=".$product->getID()."\" method=\"post\" class=\"cart-items\">
                                            <div class=\"border rounded\">
                                                <div class=\"row bg-white\">
                                                    <div class=\"col-md-3 pl-0\">
                                                        <img src=".$product->getPath()." alt=\"Image1\" class=\"img-fluid\">
                                                    </div>
                                                    <div class=\"col-md-6\">
                                                        <h5 class=\"pt-2\">".$product->getBookName()."</h5>
                                                        <small class=\"text-secondary\">Shitesi: Bibliotech</small><br>
                                                        <small class=\"text-secondary\">Sasia:".$product->getQuantity()."</small>
                                                        <h5 class=\"pt-2\">€".$product->getPrice()."</h5>
                                                        <a href='removeBook.php?id=".$i."' id=\"removeBtn\">Remove</a>
                                                    </div>
                                                    <div class=\"col-md-3 py-5\">
                                                        <div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>";
                                        $total=$total+($product->getPrice()*$product->getQuantity());
                                        $bookCount=$bookCount+$product->getQuantity();
                        }
                    }else{
                        echo "<h5>Shporta eshte e zbrazet. </h5>";
                    }

                ?>

            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>Detajet e blerjes</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                echo "<h6>Cmimi ($bookCount libra)</h6>";
                            }else{
                                echo "<h6>Cmimi (0 libra) </h6>";
                            }
                        ?>
                        <hr>
                        <h6>Shuma per t'u paguar</h6>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <h6>€<?php echo $total; ?></h6>
                        
                        <hr>
                        <h6>€<?php
                            echo $total;
                            ?></h6>
                            <hr>
                    </div>
                    <div class="col-md-6">
                        <a href='checkout.php' id="paguajBtn">Paguaj</a>
                        <hr>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--::footer_part start::-->
<?php require("footer.php"); ?>
<!--::footer_part end::-->

  <!-- jquery plugins here-->
  <!-- jquery -->
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
  <script src="js/stellar.js"></script>
  <script src="js/price_rangs.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
