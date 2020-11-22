<?php require_once("../resources/config.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>
Fine-Choice-Shopping-Mart
</title>
<link rel='stylesheet' type="text/css" href='proj.css'/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel='stylesheet' type="text/css" href="customelogin.css">
</head> 
<body>   
	

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    
<?php include(TEMPLATE_FRONT . DS . "slider.php") ?>

<h1 style="color: blueviolet;text-align: center;background-color: lightblue;">SHOP FOR HEALTHY FOODS</h1> 
<div class="asdf2" style="padding-top: 20px;background-color: lightblue;">    
    <div class="gallery2" style="margin-left: 450px;">
        <a target="_blank" href="#">
            <img src="honey-810x524.jpg" alt="Cinque Terre" style="object-fit: cover;">
        </a>
        <h1 style="margin-top: -110px;color: lightblue;padding-left: 30px;">Honey</h1>
    </div>
    <div class="gallery2" style="margin-left: 10px;text-align: center;">
        <a target="_blank" href="#">
            <img src="olive.jpg" alt="Cinque Terre" style="object-fit: cover;">
        </a>
        <h1 style="margin-top: -110px;color: lightblue;">Olive-Oil</h1>
    </div>
    <div class="gallery2" style="margin-left: 10px;margin-right: 250px;">
        <a target="_blank" href="#">
            <img src="dry-fruits-nuts-1532963193-4150898.jpeg" alt="Cinque Terre">
        </a>
        <h1 style="margin-top: -110px; color: lightblue;">Dry-Fruits</h1>
    </div>
</div>
<div class="asdf3" style="height: 350px; padding-top: 10px;background-color: lightblue;">
        <div class="gallery2" style="margin-left: 450px;">
        <a target="_blank" href="#">
            <img src="download.jpg" alt="Cinque Terre" style="object-fit: cover;">
        </a>
        <h1 style="margin-top: -110px;color: lightblue;padding-left: 0px;">Green-Tea</h1>
    </div>
    <div class="gallery2" style="margin-left: 10px;text-align: center;">
        <a target="_blank" href="#">
            <img src="row-of-spoons-with-different-dried-pulses-578190111-5713fbb13df78c3fa2086e94.jpg" alt="Cinque Terre" style="object-fit: cover;">
        </a>
        <h1 style="margin-top: -110px;color:lightblue;"><b>Pulses</b></h1>
    </div>
    <div class="gallery2" style="margin-left: 10px;margin-right: 250px;">
        <a target="_blank" href="#">
            <img src="Beans-800x416.jpg" alt="Cinque Terre">
        </a>
        <h1 style="margin-top: -110px;margin-left: 30px; color:lightblue;">Beans</h1>
    </div>
</div>
          
    <h1 style="color: red; text-align: center;">PRODUCTS</h1>
  
<div class="asdf">
<?php get_products(); ?>
</div>
    
    <div class ="healthy" style="height:auto;text-align: center;padding-top: 100px;">
        <img src="Blog_thumb-108-1.jpg" style="height: 300px;width:1300px; object-fit:fill;box-shadow: 0 0 10px 0 black;">
            <!-- <h1>To Get Tight, Eat Right!</h1>
        -->
    </div>


    
<!--<?php include(TEMPLATE_FRONT . DS . "categories.php") ?>-->

  <?php get_categories(); ?>  
<?php include(TEMPLATE_FRONT . DS . "footers.php") ?>

<script src ="password.js"></script>
</body>
</html>