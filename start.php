<?php
extract($_POST);

if(isset($next)){

    if($usertype == 'parents'){
        echo "<script> window.location='index.php' </script>";

    }else if($usertype == 'staff'){
        echo "<script> window.location='index_staff.php' </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <title>Kids Immunization System</title>
</head>
<body style="background-color: #fed0bb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
				<div class="text-center">
					<img src="images/logo_kkm.png" class="rounded" alt="logo kkm" style="margin-top: 50px; margin-bottom: 10px; width: 152.75px; height: 102px">
					<h2 class="text-center">Kids Immunization System</h2>
				</div>
                <div class="card bg-light mt-3" style="border-radius: 10px;">
                    <div class="card-title text-white" style="border-radius: 10px 10px 0px 0px; background-color: #EA526F">
                        <h3 class="text-center py-3">Login</h3>
                    </div>
					
                    <div class="card-body">
                        <form method="post">
                            <select name="usertype" class="form-select mb-3">
                                <option selected hidden>Select your user type</option>
                                <option value="parents">Parents</option>
                                <option value="staff">Staff</option>
                            </select>
                            <div class="d-grid gap-2 mt-3">
								<button class="btn btn-success mt-3" name="next">Next</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>