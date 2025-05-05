<?php 

include("connection.php");
session_start();
error_reporting(0);

if(isset($_POST['Register']))
{
	extract($_POST);
	if($userPassword===$confirmpassword){
		$query = "INSERT INTO parents (parentsIC,parentsName,parentsEmail,parentsGender,parentsPassword) VALUES('$userIC','$userName','$userEmail','$userGender','$userPassword')";

		if (mysqli_query($con, $query)){
			echo "<script> window.alert('Your Account has been created')</script>";
			echo "<script> window.location='index.php' </script>";
		}else{
			echo "<script> window.alert('Could not register your account')</script>";
			echo "<script> window.location='register.php' </script>";
		}
	}
	/*else if(empty($userIC)){
		echo "<script> window.alert('Please fill in the field')</script>";
		echo "<script> window.location='register.php' </script>";

	}
	else if(empty($userName)){
		echo "<script> window.alert('Please fill in the field')</script>";
		echo "<script> window.location='register.php' </script>";

	}
	else if(empty($userEmail)){
		echo "<script> window.alert('Please fill in the field')</script>";
		echo "<script> window.location='register.php' </script>";

	}
	else if(empty($userGender)){
		echo "<script> window.alert('Please fill in the field')</script>";
		echo "<script> window.location='register.php' </script>";

	}
	else if(empty($userPassword)){
		echo "<script> window.alert('Please fill in the field')</script>";
		echo "<script> window.location='register.php' </script>";

	}
	else if(empty($confirmpassword)){
		echo "<script> window.alert('Please fill in the field')</script>";
		echo "<script> window.location='register.php' </script>";

	}*/
	else{
		
		echo "<script> window.alert('Password do not match')</script>";
		echo "<script> window.location='register.php' </script>";
	}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
    <title>Kids Immunization System</title>
</head>
<body style="background-color: #fed0bb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
				<div class="text-center">
					<img src="images/logo_kkm.png" class="rounded" alt="logo kkm" style="margin-top: 40px; margin-bottom: 10px; width: 152.75px; height: 102px">
					<h2 class="text-center">Kids Immunization System </h2>
				</div>
                <div class="card bg-light mt-1" style="border-radius: 10px;">
                    <div class="card-title text-white" style="border-radius: 10px 10px 0px 0px; background-color: #EA526F">
                        <h3 class="text-center py-3">Registration </h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
							<input type="text" name="userIC" placeholder="IC" class="form-control mb-3" required>
							<input type="text" name="userName" placeholder="Name" class="form-control mb-3" required>
							<input type="text" name="userEmail" placeholder="Email" class="form-control mb-3" required>
                            <input type="password" name="userPassword" placeholder=" Password" class="form-control mb-3" required>
							<input type="password" name="confirmpassword" placeholder=" Confirm Password" class="form-control mb-3" required>
							<div class="d-grid gap-2 mt-3">
								<button class="btn btn-success mt-3" name="Register">Register</button>
							</div>
                        </form>
                    </div>
					<br>
					<div><p class="text-center">Already have an account?<a href="index.php" style="text-decoration:none"> click here</a></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>