<?php require_once("../resources/config.php"); ?>
<?php require_once("../resources/cart.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fine-Choice-Shopping-Mart - Checkout</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel='stylesheet' type="text/css" href='proj.css'/>
</head>
<body>
<?php include(TEMPLATE_FRONT . DS . "welhead.php") ?>
<!-- Page Content -->
<div class="container">
    <!-- /.row --> 
    <div class="row">
        <h4 class="text-center bg-danger"><?php display_message(); ?></h4>
        <h1>Checkout</h1>
        <form action="https://www.sandbox.paypal.com/webapps/hermes?token=22D92040GR926430S&useraction=commit&mfid=1606134320212_7a0d23cb0e93f" method="post">
        <input type="hidden" name="cmd" value="_cart">
        <input type="hidden" name="business" value="sb-jjf591733166@business.example.com">
        <input type="hidden" name="currency_code" value="INR">
        <input type="hidden" name="upload" value="1">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Sub-total</th>
                </tr>
            </thead>
            <tbody>
                <?php carts(); ?>
            </tbody>
        </table>
            <?php echo show_paypal_btn(); ?>
        </form>

<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
    <h2>Cart Totals</h2>
    <table class="table table-bordered" cellspacing="0">
        <tr class="cart-subtotal">
            <th>Items:</th>
            <td><span class="amount"><?php 
                echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity'] = "";?>
                </span>
            </td>
        </tr>
        <tr class="shipping">
            <th>Shipping and Handling</th>
            <td>Free Shipping</td>
        </tr>
        <tr class="order-total">
            <th>Order Total</th>
            <td><strong>
                <span class="amount">Rs 
                <?php 
                echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total'] = "0";
                ?>
                </span>
                </strong>
            </td>
        </tr>
    </table>
</div>
<!-- CART TOTALS-->
 </div>
<!--Main Content-->
 <hr>   
<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2030</p>
                </div>
            </div>
        </footer>
</div>
<!-- /.container -->  
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>