<!doctype html>
<html>
<head>
    <title><?=$lajmi[$id]['titulli'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
    <style>
        .btn_3 {
            display: inline-block;
            padding: 9px 42px;
            border-radius: 50px;
            background-color: #2f7dfc;
            border: 1px solid #f4f4f4;
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            font-weight: 400;
            border: 1px solid #2f7dfc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        /* line 52, /Applications/MAMP/htdocs/palash/cl/august 2019/202. Shop/202 shop html/sass/_button.scss */
        .btn_3:hover {
            background-color: red;
            color: #fff;
        }

    </style>
</head>
<body>
<?php
include ("header.php");
?>
<br/><br/>
<div class="container">


                <div class="row">
                    <div class="col-md-3"><?=$lajmi[$id]['foto'] ?></div>
                    <div class="col-md-9">
                        <br/><br/>
                        <h1 align="center"><?=$lajmi[$id]['titulli'] ?></h1><br/>
                        <p align="center"><?=$lajmi[$id]['teksti'] ?></p><br/><br/><br/>
                        <div class="row">
                            <div class="col-md-6"><p align="left"><a href="categories.php">Kreu</a></p></div>
                            <div class="col-md-6"><h5 align="right"><?=$lajmi[$id]['autori'] ?></h5></div>
                        </div>
                        <br/><br/>
                        <div class="row">
                            <div class="col-12">
                                <h3 align="center"><?=$lajmi[$id]['cmimi'] ?></h3>
                            </div>
                            <input type="button" value="Shto në shportë" class="btn_3" align="center" style="margin-left: auto;margin-right: auto"/>

                        </div>
                    </div>
                </div>

            </div>




<!--<h4>--><?//=$lajmi[$id]['rubrika'] ?><!--</h4>-->
<!--<div>--><?//=$lajmi[$id]['teksti'] ?><!--</div>-->
<!--<p>--><?//=$lajmi[$id]['autori'] ?><!--</p>-->
</div>
</body>

</html>








