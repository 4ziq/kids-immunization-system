<?php
include('connection.php');
//session_start();
	
	//prevent user from visiting to other pages if not login yet
	/*if(!isset($_SESSION['User']))
	{
		// not logged in
		header('Location: login.php');
		exit();
	}*/
	
	//login process
    if(isset($_POST['Login']))
    {
       if(empty($_POST['IC']) || empty($_POST['Password']))
       {
            //header("location:login.php?Empty= Please Fill in the Blanks");
			echo "<script> window.alert('Please fill in the field')</script>";
			echo"<script> window.location.href='index.php'</script>";
       }
       else
       {
		    $query="select parentsIC, parentsPassword from parents where parentsIC='".$_POST['IC']."' and parentsPassword='".$_POST['Password']."'";
		    $result=mysqli_query($con,$query);

		    if(mysqli_fetch_assoc($result))
		    {
				session_start();
			    $_SESSION['User']=$_POST['IC'];
			    echo"<script> window.location.href='home.php'</script>";
			    //header("location:index.php");
		    }
		    else
		    {
			    echo "<script> window.alert('Invalid IC or Password')</script>";
			    echo"<script> window.location.href='index.php'</script>";
		    }
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
                        <h3 class="text-center py-3">Parents Login</h3>
                    </div>
					
                    <div class="card-body">
                        <form method="post">
                            <input type="text" name="IC" placeholder=" IC" class="form-control mb-3">
                            <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
							<div class="d-grid gap-2 mt-3">
								<button class="btn btn-success" name="Login">Login</button>
							</div>
							<div class="d-grid gap-2 mt-3">
								<a href="start.php" class="btn btn-secondary">Back</a>
							</div>
                        </form>
                    </div>
					<div><p class="text-center">Do not have an account?<a href="register.php" style="text-decoration:none"> click here</a></div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>