<?php
require_once("../../../resources/config.php");

if(isset($_GET['id'])){

	$query = query("DELETE FROM reports WHERE report_id =" . escape_string($_GET['id']));
	confirm($query);

	set_message("Report Deleted");
	redirect("../../../public/dashboard/index.php?reports");
} else{
	redirect("../../../public/dashboard/index.php?reports");

}

?>