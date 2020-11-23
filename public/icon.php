<?php require_once("../resources/config.php");
?>



<!DOCTYPE html>
<html>
<head>
 	<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style type="text/css">
		* {
      box-sizing: border-box;
    }

.model{
        width: 400px;
        height: 500px;
        background:transparent;
        background-color: rgba(255, 0, 0, 0.2);
        color: #fff;
        position: absolute;
        box-sizing: border-box;
    }

    .wrap{
      padding-left: 450px;
      padding-top: 80px;
    }
/* Style the input container */
.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
  padding-left: 30px;
  padding-right: 30px;
}

/* Style the form icons */
.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

/* Style the input fields */
.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  background: white;
  border-right:none;
  border-top: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for all buttons */
button {
  background-color: dodgerblue;
  color: white;
  border: none;
  cursor: pointer;
  width: 100%;
  box-sizing: border-box;
  font-size: 1.5em;
  border-radius: 10px;
  text-align: center;
}
.btn:hover {
  opacity: 0.8;
}

.bttn{
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 10px;
}
.Goback{
	background-color: #4CAF50;
	border:none;
	color:white;
	padding:15px 32px;
	text-align:center;
	text-decoration:none;
	display:inline-block;
	font-size:16px;
	margin:4px 2px;
	cursor:pointer;
}
.Goback:hover{
  text-decoration:none;
  color:white;
}

	</style>
</head>

<body>
<a href="index.php" class="Goback">Back to home page</a>
  <div class="wrap">
  <div class="model">
  <h1 style="text-align: center; font-size: 28px; font-family: sans-serif; padding-bottom: 10px;">Login Here</h1>
  <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-black text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>


                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-black text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
  <form   class="" action="process.php" method="post" enctype="multipart/form-data">
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="username" color ="white" placeholder="Username" name="username">
  </div>

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>
  <div class="button">
  <button class="btn" type="submit" name="login" class="btn" >Login</button>
  </div>
</form>
</div>
</div>
</body>
</html>