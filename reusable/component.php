<?php

function component($productname, $productprice, $productimg, $productid){
    $arr = array('img',$productimg);
	//$k= implode("\\",$arr);
	$element = '<div class="col-lg-4 col-sm-6">
                    <div class="single_feature_post_text">
                        <div class="img-resize" style="text-align: center;margin-left: 50px;margin-top: 30px;">
                        <a href="libri.php?bookId='.$productid.'"><img src="'.$productimg.'" alt="#" style="width:233;height:354"></a></div>  
                    </div>
                    <h3 style="font-family: fantasy;margin-left: 120px;">'.$productname.'</h3>
                        <p style="font-size: medium;text-align: center;margin-left: 20px;margin-right: 20px;">'.$productprice.'€</p>  
                </div>';

    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cartii.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src='$productimg' alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Shitesi: Bibliotech</small>
                                <h5 class=\"pt-2\">€$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
