<?php require_once("config.php"); ?>
<?php
session_start(); 
    if(isset($_GET['logout']))
    unset($_SESSION['user']);
    {
        session_destroy();
        header("location:index.php");
    }

?>