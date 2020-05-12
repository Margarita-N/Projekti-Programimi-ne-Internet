<?php session_start() ?>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
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
    <style>
        .red{
            color:red;
        }
        #selector select{
            display: inline-block;
        }
        #ditelindja{
            height:42px;
            border:1px solid lightgrey;
            border-radius: 5px;
            color: grey;
        }
        #date-label{
            margin-left:20px;
            color:grey;
        }
        #gender-selector{
            align-items: center;
            margin:5px;
            margin-left:20px;
            color:grey;
        }
        #gender-selector #f-option{
            margin:5px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("form").submit(function(event){
                event.preventDefault();

                var confirmation=null;
                <?php if(isset($_SESSION['user'])){
                    echo 'var confirmation=confirm("A user is already logged in!\nDo you want to log out of that account to proceed?");';
                }
                ?>
                if(confirmation){ <?php unset($_SESSION['user']); ?> }
                else if(confirmation==false){alert("You must log out first to sign up!"); }
                
    
                
                var username=$("#username").val();
                var email=$("#email").val();
                var password=$("#password").val();
                var confirmPassword=$("#confirmPassword").val();
                var gender=$('input[name="gender"]:checked').val();
                var shteti=$("#state").val();
                
                $.ajax({
                    url: "validate-signup.php",
                    data:{
                        username:username,
                        email:email,
                        password:password,
                        confirmPassword:confirmPassword,
                        gender:gender,
                        state:shteti,
                        //ditelindja:ditelindja
                        },
                    type:'POST',
                    success: function(result){
                            $(".error-field").html(result);
                }});

            })
        })
    </script>
</head>

<body class="bg-white">
    <!--::header part start::-->
    <?php require("Reusable/header.php"); ?>
    <!-- Header part end-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Oh hello there ! <br>
                                Become a part of our family below</h3>
                                <p class="error-field"></p>
                            <form id="signup-form" class="row contact_form" action="signup.php" method="post">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" value="">
                                </div>
                                <div class="creat_account d-flex align-items-center" id="gender-selector">
                                    <input type="radio" id="f-option" name="gender" value="F" checked>Female
                                    <input type="radio" id="f-option" name="gender" value="M">Male
                                </div>
                                <div class="col-md-12 form-group p_star" id="selectors">
                                    <select name="state" id="state">
                                        <option value="Kosove">Kosove</option>
                                        <option value="Shqiperi">Shqiperi</option>
                                        <option value="Maqedoni">Maqedoni</option>
                                    </select>
                                </div>
                                <div class="creat_account d-flex align-items-center">
                                    
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="signup" class="btn_3" id="signup-submit" name="signup">
                                        sign up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Already a member?</h2>
                            <p>You just need to log in to experience the magic of books</p>
                            <a href="login.php" class="btn_3">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

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
    <?php require("Reusable/footer.php"); ?>
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
</body>

</html>
