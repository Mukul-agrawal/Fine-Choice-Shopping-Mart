<?php require_once("../resources/config.php"); ?>
<div class="navbar">
    <ul>
        <div class="bar">
            <li><b><a href="index.php">HOME</a></b></li>
            <li><b><a href="dashboard/index.php">ADMIN</a></b></li>
            <li><b><a href="#linking">ABOUT-US</a></b></li>
            <div class="dropdown">
                <button class="dropbtn"><b><a href="#linking1">CATEGORY</a></b></button>
                <div class="dropdown-content">
                    <?php get_categories_in_dropdown(); ?>
                </div>
            </div>
            <li><b><a href="checkout.php">CART</a></b>
            <li><b><a href="contact.php">CONTACTS</a></b></li>
            <?php if(isset($_SESSION['email'])){?>
            <li><b><a href="">Login | Register</a></b>
                <?php
				}else{
				echo '<li><b><a href=""><?php echo $_SESSION["name"]; ?> Login | Register</a></b>';
                }?>
                <ul>
                <li>
                         <button  class ="button" onclick="document.getElementById('id01').style.display='block'" style="width:180px;">CUSTOMER</button>
                               <div id="id01" class="modal">
                                    <form class="modal-contentt animate" method="post">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <h1 style="color: white; text-align: center; padding-top: 5px; font-size: 35px; font-family: sans-serif;">SignUp Here</h1>
                                    <form action="" method="post">
                                      <?php 
                                      if(isset($_POST['submit'])){
                                        $name=escape_string($_POST['usrnm']);
                                        $uname=escape_string($_POST['uname']);
                                        $password=escape_string($_POST['psw']);
                                        $email=escape_string($_POST['email']);
                                        $phone=escape_string($_POST['phn']);
                                        $query = query("SELECT * FROM users where name = '{$name}' ");
                                        confirm($query);

                                        if(mysqli_num_rows($query) == 1){
                                        echo "Username Already Exist";
                                        }

                                        else{

                                          $query = "INSERT INTO users (name,username,email, password,phoneno) 
                                                  VALUES('$name','$uname','$email', '$password',$phone)";
                                                  query($query);

                                        }
                                        }
                                      ?>
                                    <div class="container">
                                    <div class="con"><i class="fa fa-user icon" style="color:;"></i></div>
                                    <input type="text " placeholder="Enter Your Name" name="usrnm">
                                    </div>
                                    <div class="container">
                                    <div class="con"><i class="fa fa-envelope icon"></i></div>
                                    <input type="email " placeholder="Your email Id" name="email">
                                    </div>
                                    <div class="container">
                                    <div class="con"><i class="fa fa-user icon"></i></div>
                                    <input type="text " placeholder="Enter User Name" name="uname">
                                    </div>
                                    <div class="container">
                                    <div class="con"><i class="fa fa-phone icon"></i></div>
                                    <input type="Phone " placeholder="Enter Phone Number" name="phn">
                                    </div>
                                    <div class="container">
                                    <div class="con"><i class="fa fa-key icon"></i></div>
                                    <input type="password " placeholder="Enter Password" name="psw">
                                    </div>
                                    <div>
                                    <button class="buttoon" name="submit" type="submit ">SignUp</button>
                                  </div>
                                    <p style="padding-top: 5px; font-size: 20px; font-family: sans-serif;">if already account then<a href="icon.php" style="color: white; padding-top: 5px; font-size: 25px; font-family: sans-serif;">Login</a></p>
                                    </form>
                                  </form>
                                    </div>

                                <script>
                                    var modal = document.getElementById('id01');
                                    
                                    window.onclick = function(event) {
                                        if (event.target == modal) {
                                            modal.style.display = "none";
                                        }
                                    }
                                </script>
                          <button class ="button" style="width:180px;"><a href ="newsignup.php" style="color: aliceblue;">ADMIN</a></button>
        
                                <script>
                                    
                                    var modal = document.getElementById('id02');
                                    
                                    window.onclick = function(event) {
                                        if (event.target == modal) {
                                            modal.style.display = "none";
                                        }
                                    }
                                </script>
                      </li>    
                  </ul>
            </li>
            </div>
        </ul>
        </div>