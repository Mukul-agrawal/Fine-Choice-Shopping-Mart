<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>
Fine-Choice-Shopping-Mart
</title>
    
<link rel='stylesheet' type="text/css" href='proje.css'/>
<link rel='stylesheet' type="text/css" href='proj.css'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel='stylesheet' type="text/css" href="customelogin.css">

</head> 
<body>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<h1 style="color:brown;">Dairy-Products</h1>
<?php
$query = query(" SELECT * FROM products WHERE product_category_id=1002");
    confirm($query);

while($row = fetch_array($query)){

$product = <<<DELIMETER
<div class="gallery" style="margin-left: 100px;">
        <a target="_blank" href="#">
            <img src="{$row['product_image']}" alt="Cinque Terre">
        </a>
<div class="desc">{$row['product_title']}</div>
</div>
</div>

DELIMETER;
    echo $product;
}
?>

<div class="footer">
        <div class="col">
            <h1>HELP</h1>
            <div class="row">
                <a href="#">Delivery</a>
                <a href="#">Secure Payment</a>
                <a href="#">Search Near By Stores</a>
                <a href="#">Return</a>
            </div>
        </div>
        <div class="col">
            <a id="linking"><h1>ABOUT US</h1></a>
            <div class="row">
                <p>
                    Supporting small business
                   <br>Out For Delivery<br>
                    Working at Home town grocers
                    <a href="aboutus.html">Read More</a>
                </p>
            </div>
        </div>
        <div class="col">
            <h1>FOLLOW US</h1>
            <div class="row">
                <div class="icon1">
                <a href="https://www.facebook.com/"><i class="fa fa-facebook-square" style="font-size:40px;color:mediumblue;"></i></a>
                <a href="https://www.youtube.com/"><i class="fa fa-youtube-play" style="font-size:48px;color:red"></i></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter" style="font-size:40px;color:mediumblue"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <h1>CONTACTS</h1>
            <div class="row">
                <span>shoppingmart@gmail.com</span>
                <span>(+91) 9787****42</span>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr><a id="LINKING"></a>
        &copy; 2020 All rights reserved. <a href="#">PRIVACY & POLICY</a> | <a href="#">Terms of Use</a> | <a href="#">Give us feedback</a>
    </div>

</body>
</html>