<?php require_once("../../config.php");

if(isset($_GET['id'])){
	
$query = query("DELETE FROM shoptable WHERE shop_id = " . escape_string($_GET['id'])."");
confirm($query);

set_message("User Deleted");
redirect("../../../public/dashboard/index.php?users");


}else{

redirect("../../../public/dashboard/index.php?users");
}
?>