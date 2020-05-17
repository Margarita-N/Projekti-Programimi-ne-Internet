<?php
require("db/dbconfig.php");
require("reusable/user-class.php");
session_start();
$conn=new mysqli(serverName,username,password,dbname);

$id=$_GET['bookId'];

$query='SELECT * FROM librat WHERE bookID='.$id;
$resultArray=mysqli_query($conn,$query);

while($result=$resultArray->fetch_assoc()){
    $bookName=$result['bookName'];
    $author=$result['author'];
    $price=$result['price'];
    $shtepiaBotuese=$result['shtepiaBotuese'];
    $nrFaqeve=$result['numriFaqeve'];
    $permbajtja=$result['permbajtja'];
    $fotopath=$result['fotoPath'];
    $rating=$result['rating'];
    $stock=$result['stock'];
    $kategoria=$result['Kategoria'];
}

?>
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo $bookName; ?></title>
  <link rel="icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/lightslider.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <style>
      .btn-style{
          border:none;
          border-radius:100%;
          background-color:#f76969;
          color:white;
          width:50px;
          height:50px;
      }
      #addBook{
        padding:15px;
        background-color:#f76969;
        color:white;
        border:none;
        border-radius:20px;
      }
  </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/search-books.js"></script>
    <script>
        $(document).ready(function(){
            $("#addNew").submit(function(event){
                event.preventDefault();
                var product_id=$("#bookid").val();
                var quantity=$("#quantity").val();
                $.ajax({
                    url: "add-to-cart.php",
                    data:{
                      id:product_id,
                      quantity:quantity
                    },
                    type:'POST',
                    success: function(result){
                            $(".alert-box").html(result);
                    }});
                
            })
        })

    </script>
</head>

<body class="bg-white">
   <!--::header part start::-->
   <?php require("header.php"); ?>
    <!-- Header part end-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="product_slider_img">
            <div id="vertical">
              <div data-thumb="img/product_details/prodect_details_1.png">
                <img src="<?php echo $fotopath; ?>" />
              </div>
              
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3><?php echo $bookName; ?></h3>
            <h2><?php echo $price; ?>€</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Kategoria</span> :<?php echo $kategoria; ?></a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : <?php echo $stock; ?></a>
              </li>
            </ul>
            <p>
                <?php echo $permbajtja; ?>
            </p>
            <div class="card_area">
              <div class="product_count d-inline-block">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="1" max="3" id="quantity">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <div class="add_to_cart">
                  <form action="libri.php?bookId=<?php echo $id; ?>" method="post" id="addNew">
                    <button type="submit" name="add" id="addBook">Add to cart</button>
                    <input type="hidden" id="bookid" value="<?php echo $id; ?>">
                    <p class="alert-box"></p>
                  </form>
              </div>
              <div class="social_icon">
                  <a href="https://www.facebook.com/" class="fb"><i class="ti-facebook"></i></a>
                  <a href="https://twitter.com/" class="tw"><i class="ti-twitter-alt"></i></a>
                  <a href="https://www.linkedin.com/" class="li"><i class="ti-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Pershkrimi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Specifikimet</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          <p>
            <?php echo $permbajtja; ?>
          </p>
        </div>
        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>Titulli i librit:</h5>
                  </td>
                  <td>
                    <h5><?php echo $bookName; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Autori:</h5>
                  </td>
                  <td>
                    <h5><?php echo $author; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Cmimi:</h5>
                  </td>
                  <td>
                    <h5><?php echo $price; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Shtepia Botuese:</h5>
                  </td>
                  <td>
                    <h5><?php echo $shtepiaBotuese; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Numri i faqeve:</h5>
                  </td>
                  <td>
                    <h5><?php echo $nrFaqeve; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Vleresimi:</h5>
                  </td>
                  <td>
                    <h5><?php echo $rating; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Stock:</h5>
                  </td>
                  <td>
                    <h5><?php echo $stock; ?></h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Kategoria:</h5>
                  </td>
                  <td>
                    <h5><?php echo $kategoria; ?></h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->

  <!-- product_list part start-->
  <section class="product_list best_seller padding_bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section_tittle text-center">
            <h2>Te ngjashme</h2>
          </div>
        </div>
      </div>
      <div class="row">
          <?php 
            $similarBooksQuery='SELECT * FROM librat WHERE Kategoria="'.$kategoria.'" LIMIT 4';
            $books=mysqli_query($conn,$similarBooksQuery);

            while($book=$books->fetch_assoc()){
                echo '<div class="col-lg-3 col-sm-6">
                            <div class="single_category_product">
                                <div class="single_category_img">
                                    <a href="libri.php?bookId='.$book['bookID'].'"><img src="'.$book['fotoPath'].'" alt="" style="width:240px;height:380px;"></a>
                                    <div class="category_social_icon">
                                        <ul>
                                        <li><button class="btn-style"><i class="ti-bag"></i></button></li>
                                            <!-- <li><a href="#"><i class="ti-bag"></i></a></li> -->
                                        </ul>
                                    </div>
                                    <div class="category_product_text">
                                        <a href="single-product.html"><h5>'.$book['bookName'].'</h5></a>
                                        <p>'.$book['price'].'€</p>
                                    </div>
                                </div>
                            </div>
                        </div>';
            }

          ?>
      </div>
    </div>
  </section>
  <!-- product_list part end-->

  

  <!-- subscribe_area part start-->
  <section class="instagram_photo">
     <div class="container-fluid">
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
  <script src="js/lightslider.min.js"></script>
  <!-- swiper js -->
  <script src="js/mixitup.min.js"></script>
  <script src="js/lightslider.min.js"></script>
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
