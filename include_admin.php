<?php
//home
//if (isset($_GET['action']) && $_GET['action'] =='home'){
	//$file= "dashboard.jsp";
	
	//include 'home_content.php';
//}

//register staff
if (isset($_GET['action']) && $_GET['action'] =='register_staff'){
	//$file= "dashboard.jsp";
	
	include 'register_staff.php';
}

//List staff
else if (isset($_GET['action']) && $_GET['action'] =='staff_status'){
	//$file= "dashboard.jsp";
	
	include 'staff_status.php';
}

//list of child
else if (isset($_GET['action']) && $_GET['action'] =='list_child'){
	//$file= "dashboard.jsp";
	
	include 'child_list.php';
}

//list of child
else if (isset($_GET['action']) && $_GET['action'] =='change_engine'){
	//$file= "dashboard.jsp";
	
	include 'staff_status_change.php';
}

//vacine record list
else if (isset($_GET['action']) && $_GET['action'] =='vaccine_list'){
	//$file= "dashboard.jsp";
	
	include 'vaccine_record_list.php';
}

//vacine record detail
else if (isset($_GET['action']) && $_GET['action'] =='vaccine_record_detail'){
	//$file= "dashboard.jsp";
	
	include 'vaccine_table.php';
}

//vacine record detail
else if (isset($_GET['action']) && $_GET['action'] =='home'){
	//$file= "dashboard.jsp";
	
	include 'home_content.php';
}

else{
    include 'home_content.php';
}
?>