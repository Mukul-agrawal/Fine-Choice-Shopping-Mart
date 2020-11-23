<?php require_once("../resources/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
	<style type="text/css">
		.login-model p{
			margin: 0px;
			padding: 0px;
			font-weight: bold;
		}

		.login-model{
			width: 350px;
			height: 550px;
			background:transparent;
            background-image: url('photo-1557682224-5b8590cd9ec5.jpg');
			color: lightsalmon;
			position: absolute;
			box-sizing: border-box;
		}

		.login-model input{
			width: 100%;
			margin-bottom: 20px;
		}

		.login-model input[type="text"],input[type="password"],input[type="email"],input[type="phone"]{
			border:none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 48px;
			color: #fff;
			font-size: 16px;
		}

		.login-model input[type="submit"]{
			border:none;
			outline: none;
			height: 40px;
			background: #FF8C00;
			color: #fff;
			font-size: 18px;
			font-family: sans-serif;
		}
		form{
			padding-left: 40px;
			padding-right: 40px; 
			padding-top: 40px;
			padding-bottom: none;
			font-family: sans-serif;
		}

		.model{
			padding-top: 65px;
			padding-bottom: 100px;
			padding-right: 500px;
			padding-left: 475px;
		}

		h1{
			padding-left: 75px;
			padding-top: 10px;
			font-family: sans-serif;
		}
        body{
            background-image: url('images (3).jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        
.button2 {
	display: block;
  width: 220px;
  max-width: 100%;
  margin: 0 auto;
  margin-bottom: 0;
  overflow: hidden;
  position: relative;
  transform: translatez(0);
  text-decoration: none;
  box-sizing: border-box;
  font-size: 24px;
	font-weight: normal;
	box-shadow: 0 9px 18px rgba(0,0,0,0.2);
}

.instagram {
  text-align: center;
  border-radius: 50px;
  padding: 14px;
  color: white;
  background: #BD3381;
  transition: all 0.2s ease-out 0s;
}

.gradient {
	display: block;
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  bottom: auto;
  margin: auto;
  z-index: -1;
  background: radial-gradient(90px circle at top center, rgba(238,88,63,.8) 30%, rgba(255,255,255,0));
  transition: all 0s ease-out 0s;
	transform: translatex(-140px);
	animation: 18s linear 0s infinite move;
}

@keyframes move {
	0% {
		transform: translatex(-140px);
	}
	25% {
		transform: translatex(140px);
		opacity: 0.3;
	}
	50% {
		transform: translatex(140px);
		opacity: 1;
		background: radial-gradient(90px circle at bottom center, rgba(238,88,63,.5) 30%, rgba(255,255,255,0));
	}
	75% {
		transform: translatex(-140px);
		opacity: 0.3;
	}
	100% {
		opacity: 1;
		transform: translatex(-140px);
		background: radial-gradient(90px circle at top center, rgba(238,88,63,.5) 30%, rgba(255,255,255,0));
	}
}

	</style>
<body>
	<div class="model">
	<div class="login-model">
		<h1 style="font-family: 'Bree Serif', serif;">LOGIN HERE</h1>
		<form action="" method="post" enctype="multipart/form-data">

<?php
if(isset($_POST['submit'])){
$name=escape_string($_POST['usrnm']);
$password=escape_string($_POST['psw']);
$email=escape_string($_POST['email']);
$query = query("SELECT * FROM shoptable where name = '{$name}' and password = '{$password}' and email = '{$email}'");
confirm($query);
if(mysqli_num_rows($query) == 0){
redirect("newlogin1.php");
}
else
{
	$_SESSION['name'] = $name;
	redirect(dashboard);
}


}
?>
			
			<p>UserName</p>
			<input type="text" name="usrnm" placeholder="Enter Username" required>
			<p>Password</p>
			<input type="Password" name="psw" placeholder="Enter Password" required>
			<p>Email</p>
			<input type="email" name="email" placeholder="Enter Email" required><br><br><br>
			<div>
            <button href="#" class="button2 instagram " name="submit"><span class="gradient"></span>LOGIN</button>
        </div>
		</form>
	</div>
	</div>
	<script type="text/javascript" src="formvalidation.js"></script>
</body>
</html>