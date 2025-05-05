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
       if(empty($_POST['id']) || empty($_POST['password']))
       {
            //header("location:login.php?Empty= Please Fill in the Blanks");
			echo "<script> window.alert('Please fill in the field')</script>";
			echo"<script> window.location.href='index_admin.php'</script>";
       }
       else
       {
		    $query="SELECT adminID, adminPassword FROM admin WHERE adminID='".$_POST['id']."' and adminPassword='".$_POST['password']."'";
		    $result=mysqli_query($con,$query);

		    if(mysqli_fetch_assoc($result))
		    {
				session_start();
			    $_SESSION['Admin']=$_POST['id'];
			    echo"<script> window.location.href='home_admin.php'</script>";
			    //header("location:index.php");
		    }
		    else
		    {
			    echo "<script> window.alert('Invalid ID or Password')</script>";
			    echo"<script> window.location.href='index_admin.php'</script>";
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
<body style="background-color: #FFFFFF">
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
				<div class="text-center">
					<img src="images/logo_kkm.png" class="rounded" alt="logo kkm" style="margin-top: 50px; margin-bottom: 10px; width: 152.75px; height: 102px">
					<h2 class="text-center">Kids Immunization System</h2>
				</div>
                <div class="card bg-light mt-3" style="border-radius: 10px;">
                    <div class="card-title text-white" style="border-radius: 10px 10px 0px 0px; background-color: #EA526F">
                        <h3 class="text-center py-3">Admin Login</h3>
                    </div>
					
                    <div class="card-body">
                        <form method="post">
                            <input type="text" name="id" placeholder="ID" class="form-control mb-3">
                            <input type="password" name="password" placeholder=" Password" class="form-control mb-3">
							<div class="d-grid gap-2 mt-3">
								<button class="btn btn-success" name="Login">Login</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>