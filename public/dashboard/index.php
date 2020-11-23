<?php require_once("../../resources/config.php"); ?>

<?php include(TEMPLATE_BACK . DS . "header.php") ?>

<?php 
if(!isset($_SESSION['name'])){

    redirect("../../public");
}
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <?php
            if($_SERVER['REQUEST_URI'] == "/hometown2/public/dashboard/index.php" or $_SERVER['REQUEST_URI'] == "/hometown2/public/dashboard/"){
                include(TEMPLATE_BACK . "/admin_content.php");
            }
            if (isset($_GET['orders'])) {
                include(TEMPLATE_BACK . "/orders.php");
                }
            if (isset($_GET['products'])) {
                include(TEMPLATE_BACK . "/products.php");
                }
            if (isset($_GET['categories'])) {
                include(TEMPLATE_BACK . "/categories.php");
                }
            if (isset($_GET['add_product'])) {
                include(TEMPLATE_BACK . "/add_product.php");
                }
            if (isset($_GET['edit_product'])) {
                include(TEMPLATE_BACK . "/edit_product.php");
                }
            if (isset($_GET['users'])) {
                include(TEMPLATE_BACK . "/users.php");
                }
            if (isset($_GET['add_user'])) {
                include(TEMPLATE_BACK . "/add_user.php");
                }
            if (isset($_GET['edit_user'])) {
                include(TEMPLATE_BACK . "/edit_user.php");
                }
            if (isset($_GET['reports'])) {
                include(TEMPLATE_BACK . "/reports.php");
                }
        ?> 
    </div></div>
    <!-- Page Heading -->
                
        <!-- /#page-wrapper -->
   <?php include(TEMPLATE_BACK . DS . "footer.php") ?>