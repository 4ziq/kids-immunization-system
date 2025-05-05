<!DOCTYPE html>
<head>

</head>
<?php
    if(!isset($_SESSION)) 
    {
        //header("Location: index.php"); 
        session_start(); 
    } 
    error_reporting(0);
	include("connection.php");
	$session = $_SESSION['User'];
	$query = "SELECT * FROM parents where parentsIC = '$session'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result)>0){
		//output data of each row
		while($row = mysqli_fetch_assoc($result)){
			$ic = $row["parentsIC"];
			$name = $row["parentsName"];
			$gender = $row["parentsGender"];
			$phonenum = $row["parentsPhoneNum"];
			$email = $row["parentsEmail"];
			//$password =$row["parentsPassword"];
			$address =$row["parentsAddress"];
	?>
<!-- Horizontal Layout -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                PROFILE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <!--<ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>-->
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form class="form-horizontal">
                                <!--start-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <!--<input type="text" id="email_address_2" class="form-control" placeholder="Enter your email address">-->
                                                <div class="form-control"><?php echo $name ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--start-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="ic">IC</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <div class="form-control"><?php echo $ic ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--start-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="address">Address</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <div class="form-control"><?php echo $address ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--start-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="gender">Gender</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <div class="form-control"><?php echo $gender ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--start-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <div class="form-control"><?php echo $email ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <!--start-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="phonenum">Phone Number</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            <div class="form-control"><?php echo $phonenum ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <a href='?action=profile_edit'><button type="button" class="btn btn-primary m-t-15 waves-effect">EDIT</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
    <?php
		}
	}else{
		echo "0 results";
	}
	?>