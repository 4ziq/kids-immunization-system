<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
//error_reporting(0);
include("connection.php");
extract($_POST);

if(isset($register)){
	if($staffpassword===$confirmpassword){
		$query = "INSERT INTO staff (staffIC,staffName,staffPassword,staffEmail) VALUES('$staffic','$staffname','$staffpassword','$staffemail')";

		if (mysqli_query($con, $query)){
			echo "<script type='text/javascript'> window.alert('Staff has been registered')</script>";
			echo "<script type='text/javascript'> window.location='?action=register_staff' </script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
		}else{
			echo "<script type='text/javascript'> window.alert('Failed to register')</script>";
			echo "<script type='text/javascript'> window.location='?action=register_staff' </script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
		}
	}
	else{
		echo "<script> window.alert('Password do not match')</script>";
		echo "<script type='text/javascript'> window.location='?action=register_staff' </script>";
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
	}
    
}
?>
<!-- Horizontal Layout -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>REGISTER STAFF</strong>
                            </h2>
                        </div>
                        <div class="body">
                        <h2 class="card-inside-title">STAFF INFORMATION</h2>
                        <br>
                            <form class="form-horizontal" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="staffname" class="form-control" placeholder="Enter Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ic">IC</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="staffic" class="form-control" placeholder="Enter IC" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="staffemail" class="form-control" placeholder="Enter Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="staffpassword" class="form-control" placeholder="Enter Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="confirmpassword">Confirm Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="register" class="btn btn-primary m-t-15 waves-effect">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->