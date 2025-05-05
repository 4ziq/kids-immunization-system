<!DOCTYPE html>
<head>

</head>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    error_reporting(0);
	include("connection.php");
	$session = $_SESSION['Admin'];
	$query = "SELECT * FROM admin where adminIC = '$session'";
	$result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);

    $ic = $row["adminIC"];
	$name = $row["adminName"];
	//$gender = $row["parentsGender"];
	//$phonenum = $row["parentsPhoneNum"];
	$email = $row["adminEmail"];
	//$password =$row["parentsPassword"];
	//$address =$row["parentsAddress"];

    if(isset($_POST['Save']))
    {
        $name = $_POST['name'];
        $ic = $_POST['ic'];
        //$address = $_POST['address'];
        //$gender = $_POST['gender'];
        $email = $_POST['email'];
        //$phonenum = $_POST['phonenum'];

        $sql = "UPDATE admin SET adminName='$name', adminEmail='$email' WHERE adminIC='$session'";
        //$result = mysqli_query($con,$sql) or die ("Could not execute query");
        if(mysqli_query($con,$sql)){
            echo "<script> window.alert('Your Account has been updated')</script>";
            echo "<script> window.location.href='?action=profile_staff' </script>";
        }	
        /*if (mysqli_query($con, $query)){
        
            echo "<script type='text/javascript'> window.alert('Your Account has been updated')</script>";
            echo "<script type='text/javascript'> window.location='parent_profile.php' </script>";
            
        }else{
            
            echo "Error: " . $query . "<br>" . mysqli_error($con);

        }*/
    }
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
                            <form class="form-horizontal" method="post">
                                <!--start-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control" value="<?php echo $name ?>">
                                                <!--<div class="form-control"></div>-->
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
                                                <input type="text" id="ic" name="ic" class="form-control" value="<?php echo $ic ?>" disabled>
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
                                                <input type="text" id="email" name="email" class="form-control" value="<?php echo $email ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end-->
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="Save" class="btn btn-primary m-t-15 waves-effect">SAVE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
    