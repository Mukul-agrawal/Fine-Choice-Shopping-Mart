<?php

$uploads_directory = "uploads";

// helper function

function redirect($location){

	return header("Location: $location ");
}
function set_message($msg){

    if(!empty($msg)){

        $_SESSION['message'] = $msg;
    }else{

        $msg = "";
    }
}
function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
function last_id(){
    global $connection;
    
    return mysqli_insert_id($connection);
    }
    
    function query($sql){
    
        global $connection;
    
        return mysqli_query($connection, $sql);
    }
    
    
    function confirm($result){
    
    global $connection;
    if(!$result){
        
        die("QUERY FAILED" . mysqli_error($connection));
    }
    
    }
    function escape_string($string){

        global $connection;
    
        return mysqli_real_escape_string($connection,$string);
    }
    
    function fetch_array($result){
    
        return mysqli_fetch_array($result);
    }

//get products

function get_products(){

	$query = query(" SELECT * FROM products where product_category_id<=104");
	confirm($query);

while($row = fetch_array($query)){

  $product_image = display_image($row['product_image']);

	$product = <<<DELIMETER


    <div class="gallery">
        <a target="_blank" href="item.php?id={$row['product_id']}">
            <img src="../resources/{$product_image}" alt="Cinque Terre">
        </a>
        <button class="button">
            <a href="../resources/cart.php?add={$row['product_id']}"><i class="fa fa-shopping-cart" style="color:red;font-size: 20px;"></i>ADD</a>
        </button>
        <div class="desc">{$row['product_title']}</div>
    </div> 


DELIMETER;
	echo $product;
}

}
function login_user(){

    if(isset($_POST['submit'])){
    $name=escape_string($_POST['usrnm']);
    $password=escape_string($_POST['psw']);
    $email=escape_string($_POST['email']);
    $query = query("SELECT * FROM users where username = '{$name}' and password = '{$password}' and email = '{$email}'");
    confirm($query);
    if(mysqli_num_rows($query) == 0){
    redirect("icon.php");
    }
    else
    {
      $_SESSION['name'] = $usrnm;
        redirect("index.php");
    }
    
    }
    
    
}
function sign_shop(){


        if(isset($_POST['submit'])){
        $name=escape_string($_POST['usrnm']);
        $password=escape_string($_POST['psw']);
        $cpassword=escape_string($_POST['psw1']);
        $email=escape_string($_POST['email']);
        $phone=escape_string($_POST['phn']);
        $query = query("SELECT * FROM shoptable where name = '{$name}' ");
        confirm($query);
        
        if(mysqli_num_rows($query) == 1){
        echo "Username Already Exist";
        }
        
        else{
        
            $query = "INSERT INTO shoptable (name, email, password,phoneno) 
                        VALUES('$name', '$email', '$password',$phone)";
                        query($query);
        
        }
        }
        
}
function get_categories(){

            $query = query(" SELECT * FROM categories");
            confirm($query);
        
        while($row = fetch_array($query)){
        
          $product_image = display_image($row['cat_img']);
        
            $categories_links = <<<DELIMETER
            <div class="gallery1" style="height: auto;margin-left: 100px;">
                <a href="bread.php?id={$row['cat_id']}">
                    <img class="img-circle" src="../resources/{$product_image}" alt="Cinque Terre" style="width: 200px;">
                </a>
                <div class="desc1">{$row['cat_title']}</div>
            </div>
        
        
        DELIMETER;
            echo $categories_links;
        }
        
}
function get_categories_in_dropdown(){

            $query = query(" SELECT * FROM categories");
            confirm($query);
          
          while($row = fetch_array($query)){
          
            $categories_links = <<<DELIMETER
                              
                                  <a href="bread.php?id={$row['cat_id']}">{$row['cat_title']}</a>
                          
                      
          
          
          DELIMETER;
            echo $categories_links;
          }
          
}
function get_products_in_admin(){
            $query = query(" SELECT * FROM products");
                confirm($query);
            
            while($row = fetch_array($query)){
            
              $category = show_product_category_title($row['product_category_id']);
            
              $product_image = display_image($row['product_image']);
            
                $product = <<<DELIMETER
            
                    <tr>
                        <td>{$row['product_id']}</td>
                        <td>{$row['product_title']}<br>
                          <a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_image}" alt=""></a>
                        </td>
                        <td>{$category}</td>
                        <td>{$row['product_price']}</td>
                        <td>{$row['product_quantity']}</td>
                        <td><a class="btn btn-danger" href="../../resources/template/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
            
            DELIMETER;
                echo $product;
            }
}
function display_image($picture){

                global $uploads_directory;
              
                return $uploads_directory . DS . $picture;
}
function send_message(){

                if(isset($_POST['submit'])){
                
                    $to = "kshitij.gupta_bca18@gla.ac.in";
                    $from_name = $_POST['name'];
                    $subject = $_POST['subject'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                
                    $headers = "From: {$from_name} {$email}";
                
                    $result= mail($to,$subject,$message,$headers);
                
                    if(!$result){
                
                        set_message("Sorry we could not send your message");
                        redirect("contact.php");
                    }else{
                        set_message("Your Message has been sent");
                        
                    }
                }
                
}
function add_product(){
  

                    if(isset($_POST['publish'])){
                       
                       $product_title         =  escape_string($_POST['product_title']);
                       $product_category_id   =  escape_string($_POST['product_category_id']);
                       $product_price         =  escape_string($_POST['product_price']);
                       $product_description   =  escape_string($_POST['product_description']);
                       $product_quantity      =  escape_string($_POST['product_quantity']);
                       $product_image         =  escape_string($_FILES['file']['name']);
                       $short_description   =  escape_string($_POST['short_description']);
                       move_uploaded_file($_FILES['file']['tmp_name'] , UPLOAD_DIRECTORY . DS .$_FILES['file']['name']);
                    
                       $query = query("INSERT INTO products(product_title,product_category_id,product_price,product_description,product_quantity,product_image,short_description) 
                        VALUES('{$product_title}','{$product_category_id}','{$product_price}','{$product_description}','{$product_quantity}','{$product_image}','{$short_description}')");
                       $last_id = last_id();
                       confirm($query);
                       set_message("New product with id {$last_id} just added");
                       redirect("index.php?products");
                    
                    }
}
function show_categories_add_product_page(){

                        $query = query(" SELECT * FROM categories");
                        confirm($query);
                      
                      while($row = fetch_array($query)){
                      
                        $categories_options = <<<DELIMETER
                          <option value="{$row['cat_id']}">{$row['cat_title']}</option>
                                 
                      DELIMETER;
                        echo $categories_options;
                      }
                      
}
function show_product_category_title($product_category_id){

                        $category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}'");
                        confirm($category_query);
                        
                        while($category_row = fetch_array($category_query)){
                        
                          return $category_row['cat_title'];
                        }
                        
                        
}
function update_product(){
  

                            if(isset($_POST['update'])){
                               
                               $product_title         =  escape_string($_POST['product_title']);
                               $product_category_id   =  escape_string($_POST['product_category_id']);
                               $product_price         =  escape_string($_POST['product_price']);
                               $product_description   =  escape_string($_POST['product_description']);
                               $short_description     =  escape_string($_POST['short_description']);
                               $product_quantity      =  escape_string($_POST['product_quantity']);
                               $product_image         =  escape_string($_FILES['file']['name']);
                               $image_temp_location   =  escape_string($_FILES['file']['tmp_name']);
                            
                            
                            
                               if(empty($product_image)){
                                $get_pic = query("SELECT product_image FROM products WHERE product_id =" .escape_string($_GET['id'])."");
                                confirm($get_pic);
                            
                                while($pic = fetch_array($get_pic)){
                            
                            
                                  $product_image = $pic['product_image'];
                                }
                            
                            
                               }
                            
                            
                               move_uploaded_file($_FILES['file']['tmp_name'] , UPLOAD_DIRECTORY . DS .$_FILES['file']['name']);
                            
                               $query = "UPDATE products SET ";
                               $query .= "product_title              = '{$product_title}'            ,";
                               $query .= "product_category_id        = '{$product_category_id}'      ,";
                               $query .= "product_description        = '{$product_description}'      ,";
                               $query .= "short_description          = '{$short_description}'        ,";
                               $query .= "product_price              = '{$product_price}'            ,";
                               $query .= "product_quantity           = '{$product_quantity}'         ,";
                               $query .= "product_image              = '{$product_image}'             ";
                               $query .= "WHERE product_id=" . escape_string($_GET['id']);
                            
                               $send_update_query = query($query);
                            
                               confirm($send_update_query);
                               set_message("Product has been updated");
                               redirect("index.php?products");
                            
                            }
}

                        
              