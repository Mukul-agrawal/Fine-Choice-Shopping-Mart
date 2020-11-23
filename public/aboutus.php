<?php require_once("../resources/config.php"); ?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>About us</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' type="text/css" href="customelogin.css">
</head>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>


<style>
    .dropbtn {
        background-color: transparent;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    .dropbtn a {
        font-size: 20px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: lightgreen;
        width: 220px;
        line-height: 10px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: rgb(228, 85, 85);
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: transparent;
    }

    /* Slideshow container */
    .slideshow-container {
        max-width: 100%;
        padding-left: 5px;
        position: relative;
        margin: 0 auto;
    }

    .navbar {
        width: 100%;
        height: 80px;
        background-color: rgb(204, 110, 110);
        line-height: 60px;
    }

    .navbar ul {
        float: right;
        margin-right: 40px;
    }

    .iii {
        float: left;
    }

    .navbar ul li {
        height: 60px;
        display: inline-block;
        list-style-type: none;
        font-size: 20px;
    }

    .navbar ul li a {
        text-decoration: none;
        padding: 40px;
        line-height: 40px;
    }

    .navbar ul ul {
        position: absolute;
        top: 60px;
        display: none;
        background: transparent;
    }

    .navbar ul li:hover ul {
        display: block;
        text-align: center;
        z-index: 999;
    }

    /* Style the links inside the navigation bar */
    .navbar a {

        color: hotpink;
        padding: 10px 20px;
        text-decoration: none;
        font-size: 20px;
    }

    /* Change the color of links on hover */
    .navbar a:hover {
        font-size: 20;
        color: cyan;
    }

    .navbar a:hover {
        background-color: none;
    }

    .button {
        padding-top: 10px;
        width: 50%;
        float: right;
        margin-top: 18px;
        font-size: 20px;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px #999;
    }

    .button a:nth-of-type(2) {
        padding-top: 10px;
        width: 50%;
        margin-top: 18px;
        font-size: 20px;
        float: right;
        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        box-shadow: 0 5px #999;
    }

    .button:hover {
        background-color: #3e8e41
    }

    .button:active {
        background-color: #3e8e41;
        box-shadow: 0 5px #666;
        transform: translateY(2px);
    }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;

    }

    .center1 {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    h2 {
        text-align: center;
        font-size: 36px;
        font-family: sans-serif;
        color: brown;
    }

    p {
        font-size: 24px;
        font-family: serif;
        border: 30px;
        text-align: center;
    }

    hr {
        color: yellow;
    }

    .diff {
        width: 500px;
        height: 200px;
        background-color: cadetblue;
        box-shadow: 5px 10px 10px 1px #aaaaaa;
    }

    /*footer start */
    .footer {
        margin-top: 1000px;
        padding: 20px;
        background: #272727;
        color: white;
        text-align: center;
    }

    .footer .col {
        width: 250px;
        height: 300px;
        margin: 20px;
        margin-left: 50px;
        font-size: 18px;
        display: block;
        float: left;
        background-color: none;
        color: grey;

    }

    .footer .col h1 {
        text-align: center;
        color: black;
        font-size: 18px;
        font-family: cursive;
    }

    .footer .col .row {
        margin: 0;
        padding: 15px;
        text-align: center;
        display: block;
    }

    .footer .col .row a {

        text-align: center;
        padding: 5px 5px 10px 5px;
        display: block;
    }

    .clearfix:after {
        content: "";
        display: block;
        clear: left;
    }

    .footer .col .row .icon1 a {
        display: inline-block;
    }

    span {
        color: dimgrey;
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<body style="background-color: bisque;">




    <hr>
    <h1 style="text-align: center; color: brown; font-family: inherit; font-size: 50px;"><b>ABOUT US</b></h1>
    <hr>
    <div style="width: 100%; margin-top: 10px; margin-bottom: 10px;">
        <div style="float: left; width: 50%;">
            <h2>OUR MISSION</h2>
            <p>As part of the Fine-Choice-Shopping-mart, our mission is to make it easy to do business anywhere.</p>
            <br />

            <p>We do this by giving suppliers the tools necessary to reach a global audience for their products, and by
                helping buyers find products and suppliers quickly and efficiently.</p><br />
        </div>



        <div style="float: right; width: 50%;">
            <img src="105964943-1560377013grocery-store-header.png" width="666px" height="350px" />
        </div>
    </div>


    <div style="width: 100%; margin-top: 10px; margin-bottom: 10px;">
        <div style="float: left; width: 50%;">
            <img src="marketing-to-attract-grocery-stores__large.jpg" width="640px" height="350px" />
        </div>

        <div style="float: right; width: 50%;">
            <h2>SUPPORTING SMALL BUSINESS</h2>
            <p>Fine-Choice-Shopping-mart empowers small and medium-sized businesses to reach millions of customers with
                a number of programmes that help boost their revenue, reach and productivity. By telling stories from a
                wide range of perspectives, we tell the larger story of who is and how Fine-Choice-Shopping-mart core business
                practices contribute to a better India.</p><br><br><br>

            <br />
        </div>
    </div>

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
            <a id="linking">
                <h1>ABOUT US</h1>
            </a>
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
                    <a href="https://www.facebook.com/"><i class="fa fa-facebook-square"
                            style="font-size:40px;color:mediumblue;"></i></a>
                    <a href="https://www.youtube.com/"><i class="fa fa-youtube-play"
                            style="font-size:48px;color:red"></i></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter"
                            style="font-size:40px;color:mediumblue"></i></a>
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
        &copy; 2020 All rights reserved. <a href="#">PRIVACY & POLICY</a> | <a href="#">Terms of Use</a> | <a
            href="#">Give us feedback</a>
    </div>
</body>

</html>