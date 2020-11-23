<?php require_once("../resources/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fine Choice Shopping Mart</title>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
    <?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    <?php include(TEMPLATE_FRONT . DS . "slider.php") ?>
    <h1 id=line-1>SHOP FOR HEALTHY FOODS</h1>
    <div class="products">
        <section id="product-1">
            <div class="gallery">
                <a target="_blank" href="#">
                    <img class="product-img" src="Products_images\Honey.jpg" alt="Honey" title="Honey">
                </a>
                <h1 class="product-name">Honey</h1>
            </div>

            <div class="gallery">
                <a target="_blank" href="#">
                    <img class="product-img" src="Products_images\olive.jpg" alt="Olive Oil" title="Olive Oil">
                </a>
                <h1 class="product-name">Olive-Oil</h1>
            </div>

            <div class="gallery">
                <a target="_blank" href="#">
                    <img class="product-img" src="Products_images\dry-fruits-nuts.jpeg" alt="Dry-fruits-nuts"
                        title="Dry-fruits-nuts">
                </a>
                <h1 class="product-name">Dry-Fruits</h1>
            </div>
        </section>
        <section id=product-2>

            <div class="gallery">
                <a target="_blank" href="#">
                    <img class="product-img" src="Products_images\cold drinks.jpg" alt="Colddrinks" title="Cold drink">
                </a>
                <h1 class="product-name">Green-Tea</h1>
            </div>
            <div class="gallery">
                <a target="_blank" href="#">
                    <img class="product-img" src="Products_images\row-of-spoons-with-different-dried-pulses.jpg"
                        alt="Dried-pulses" title="Dried-pulses">
                </a>
                <h1 class="product-name">Pulses</h1>
            </div>
            <div class="gallery">
                <a target="_blank" href="#">
                    <img class="product-img" src="Products_images\Beans.jpg" alt="Cinque Terre" title="Beans">
                </a>
                <h1 class="product-name">Beans</h1>
            </div>
        </section>
    </div>
    <h1 style="color: red; text-align: center;">PRODUCTS</h1>
  
<div class="asdf">
<?php get_products(); ?>
</div>
    <div class="healthy">
        <img class="healthy-img" src="Products_images\Blog_thumb.jpg">
        <h1>To Get Tight, Eat Right!</h1>
    </div>

    <!--<?php include(TEMPLATE_FRONT . DS . "categories.php") ?>-->

  <?php get_categories(); ?>  
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

<script src ="password.js"></script>
</body>

</html>