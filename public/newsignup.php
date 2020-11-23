<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="pass.js"></script>
	<style type="text/css">
            body{
            background-image: url('images (3).jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
		.loginbox p{
			margin: 0px;
			padding: 0px;
			font-weight: bold;
		}

		.loginbox{
			width: 400px;
			height: 600px;
			background-image: url('photo-1557682224-5b8590cd9ec5.jpg');
			color: lightsalmon;
            position: absolute;
			box-sizing: border-box;
            margin-top: 20px;
		}
        
		.loginbox input{
			
			width: 100%;
			margin-bottom: 20px;
		}

		.loginbox input[type="text"],input[type="password"],input[type="email"],input[type="phone"]{
			border:none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 48px;
			color: #fff;
			font-size: 16px;
		}
       
		form{
			padding-left: 40px;
			padding-right: 40px; 
			padding-top:  0px;
			padding-bottom: none;
			font-family: sans-serif;
		}

		.model{
			padding-top: 0px;
			padding-bottom: 100px;
			padding-right: 500px;
			padding-left: 450px;
            height: auto;
		}

		h1{
			padding-left: 95px;
			padding-top: -5px;
			padding-bottom: 0px;
			
		}
.button2 {
  display: block;
  width: 160px;
  height: 50px;
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
  background: #BD3381;
  color: #BD3381;
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
</head>
<body>
	<div class="model">
	<div class="loginbox">
		<h1 style="font-family: 'Bree Serif', serif;">SIGNUP HERE</h1>
		<form action="newlogin1.php" method="post" enctype="multipart/form-data">
			<?php sign_shop(); ?>
		<form ... onsubmit="return checkForm(this);">
			<p>Username<input type="text" name="usrnm" placeholder="Enter Username" class="high" required></p>
			<p>Password<input type="password" name="psw" placeholder="Enter Password" required></p>
            <p>Confirm Password: <input type="password" name="psw1" placeholder="Confirm Your Password" required></p>
			<p>Email</p>
			<input type="email" name="email" placeholder="Enter Email Address" required>
			<p>Contact Number</p>
			<input type="text" name="phn" placeholder="Enter Contact Number" required>
			<div>
			<button href="#" class="button2 instagram" style="margin-top:-10px;"><span class="gradient"></span><input type="submit" name="submit" value="SignUp" style="width: 160px; background-color: transparent;padding: 15px;border-color:#BD3381;font-size: 20px;color: white"></button>
		</div>
            
		</form>
	</form>

		<p style="padding-left: 40px;padding-top: 7px; font-size: 15px;">if already account then <a href="newlogin1.php"> Login</a></p>
	</div>
	</div>
</body>
</html>