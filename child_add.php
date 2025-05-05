<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
//error_reporting(0);

extract($_POST);
if(isset($save)){
    $query = "INSERT INTO child (childName,childIC,childBirthDate,childGender,parentsIC) VALUES('$childName','$childIC','$childBirthDate','$childGender','$userIC')";

	if (mysqli_query($con, $query)){
		echo "<script type='text/javascript'> window.alert('Child has been registered')</script>";
		echo "<script type='text/javascript'> window.location='?action=child_add' </script>";
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
	}else{
		echo "<script type='text/javascript'> window.alert('Incorect Parent IC')</script>";
		echo "<script type='text/javascript'> window.location='?action=child_add' </script>";
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
                                REGISTER CHILD
                            </h2>
                        </div>
                        <div class="body">
                        <h2 class="card-inside-title">CHILD INFORMATION</h2>
                        <br>
                            <form class="form-horizontal" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="childName" class="form-control" placeholder="Enter name" required>
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
                                                <input type="text" name="childIC" class="form-control" placeholder="Enter ic" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="birthdate">Birthdate</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="childBirthDate" class="form-control" placeholder="Enter birthdate" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- dropdown -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="gender">Gender</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select name="childGender" class="form-control show-tick" required>
                                                <option value="" disabled selected hidden>Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- #dropdown end-->
                                <br>
                                <h2 class="card-inside-title">PARENTS INFORMATION</h2>
                                <br>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="parentsname">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="userName" class="form-control" placeholder="Enter Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="parentsic">IC</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="userIC" class="form-control" placeholder="Enter IC" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="save" class="btn btn-primary m-t-15 waves-effect">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->