<?php 
//$breadcrumbArr = breadcrumbArr( 1, 2, 3, 4, 5);
//$breadcrumbArr[0]="<a href=\"./\">Sistem Kad Merah Kanak-kanak</a>";	

/*if (isset($_GET['action']))
	$action = $_GET['action'];	
else
	$action= "dashboard";*/


//home
if (isset($_GET['action']) && $_GET['action'] =='home'){
	//$file= "dashboard.jsp";
	
	include 'home_content.php';
}

//child profile
else if (isset($_GET['action']) && $_GET['action'] =='child_profile'){
	//$file= "dashboard.jsp";
	include 'child_profile.php';
	
}

//immunization record
else if (isset($_GET['action']) && $_GET['action'] =='vaccine_record'){
	//$file= "dashboard.jsp";
	include 'vaccine_record_iii.php';
	
}

//appointment date
else if (isset($_GET['action']) && $_GET['action'] =='appointment_date'){
	//$file= "dashboard.jsp";
	include 'appointment_date_ii.php';
	
}

//profile
else if (isset($_GET['action']) && $_GET['action'] =='profile'){
	//$file= "dashboard.jsp";
	include 'profile.php';
	
}

//edit profile
else if (isset($_GET['action']) && $_GET['action'] =='profile_edit'){
	//$file= "dashboard.jsp";
	include 'profile_edit.php';
	
}

//register child
else if (isset($_GET['action']) && $_GET['action'] =='child_add'){
	//$file= "dashboard.jsp";
	include 'child_add.php';
	
}

//set appointment
else if (isset($_GET['action']) && $_GET['action'] =='appointment_date_set'){
	//$file= "dashboard.jsp";
	include 'appointment_date_set_ii.php';
	
}

//set appointment ii
else if (isset($_GET['action']) && $_GET['action'] =='appointment_date_set_ii'){
	//$file= "dashboard.jsp";
	include 'appointment_date_set.php';
	
}

//add vaccine record
else if (isset($_GET['action']) && $_GET['action'] =='vaccine_record_add'){
	//$file= "dashboard.jsp";
	include 'vaccine_record_add_ii.php';
	
}

//add vaccine record ii
else if (isset($_GET['action']) && $_GET['action'] =='vaccine_record_add_ii'){
	//$file= "dashboard.jsp";
	include 'vaccine_record_add.php';
	
}

//vaccine record list
else if (isset($_GET['action']) && $_GET['action'] =='vaccine_record_list'){
	//$file= "dashboard.jsp";
	include 'vaccine_record_list.php';
	
}

//vaccine record detail
else if (isset($_GET['action']) && $_GET['action'] =='vaccine_record_detail'){
	//$file= "dashboard.jsp";
	include 'vaccine_table.php';
	
}

//add staff profile
else if (isset($_GET['action']) && $_GET['action'] =='profile_staff'){
	//$file= "dashboard.jsp";
	include 'profile_staff.php';
	
}

//edit staff profile
else if (isset($_GET['action']) && $_GET['action'] =='profile_staff_edit'){
	//$file= "dashboard.jsp";
	include 'profile_staff_edit.php';
	
}

//appointment date list
else if (isset($_GET['action']) && $_GET['action'] =='appointment_date_list'){
	//$file= "dashboard.jsp";
	include 'appointment_date_list_ii.php';
	
}


//growth summary
else if (isset($_GET['action']) && $_GET['action'] =='summary'){
	//$file= "dashboard.jsp";
	include 'child_growth_summary.php';
	
}

//growth summary detail
else if (isset($_GET['action']) && $_GET['action'] =='summary_chart'){
	//$file= "dashboard.jsp";
	include 'chart2.php';
	
}

else{
	include 'home_content.php';
}
								
?>
