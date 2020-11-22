<?php 
require_once('config.php');
session_start();
    if(isset($_POST['login']))
    {
       if(empty($_POST['username']) || empty($_POST['password']))
       {
            header("location:icon.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from users where username='".$_POST['username'] ."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['username'];
                header("location:welcome.php");
            }
            else
            {
                header("location:icon.php?Invalid= Please Enter Correct User Details ");
            }
       }
    }
    else
    {
        header("location:icon.php");
    }

?>