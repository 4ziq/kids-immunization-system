<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
error_reporting(0);
include("connection.php");



if(isset($_POST['submit']))
{
    extract($_POST);

    $childIC=$_GET['ic'];
    $query = "INSERT INTO appointment (childIC,appointmentDate,appointmentTime,appointmentVenue,appointmentStatus,nextVaccine) VALUES('$childIC','$appointmentDate','$appointmentTime','$appointmentVenue',DEFAULT,'$vaccine')";

    if (mysqli_query($con, $query)){
		echo "<script type='text/javascript'> window.alert('Appointment date has been set')</script>";
		echo "<script type='text/javascript'> window.location='?action=appointment_date_set' </script>";
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
	}else{
		echo "<script type='text/javascript'> window.alert('Incorrect child IC')</script>";
		echo "<script type='text/javascript'> window.location='?action=appointment_date_set' </script>";
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
                                SET APPOINTMENT DATE FOR <?php echo $_GET['name']?>
                            </h2> 
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post">
                                <!--parents info-->
                                <h2 class="card-inside-title">PARENTS INFORMATION</h2><br>
                                <?php
                                $childIC=$_GET['ic'];
                                $parents_query = "SELECT * FROM parents,child WHERE child.parentsIC = parents.parentsIC AND child.childIC = '$childIC'";
                                $parents_result = mysqli_query($con,$parents_query);

                                while($parents_row = mysqli_fetch_array($parents_result)){
                                    $name = $parents_row['parentsName'];
                                    $ic = $parents_row['parentsIC'];
                                    $email = $parents_row['parentsEmail'];
                                    $phonenum = $parents_row['parentsPhoneNum'];
                                    $address = $parents_row['parentsAddress'];
                                    ?>
                                <!--parents name-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="parentsname">Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="parentsname" class="form-control" value="<?php echo $name ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--parents name end-->
                                <!--parents ic-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="parentsic">IC</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="parentsic" class="form-control" value="<?php echo $ic ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--parents ic end-->
                                <!--parents email-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="parentsemail">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="parents" class="form-control" value="<?php echo $email ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--parents email end-->
                                <!--parents phone num-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="parentsphonenum">Phone Number</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="parentsphonenum" class="form-control" value="<?php echo $phonenum ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--parents phone num end-->

                                    <?php
                                }
                                ?>

                                <br><h2 class="card-inside-title">APPOINTMENT INFORMATION</h2><br>
                                <!--date-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="date">Date</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="appointmentDate" class="form-control" placeholder="Enter appointment date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--date end-->
                                <!--Time-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="time">Time</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="time" name="appointmentTime" class="form-control" placeholder="Enter appointment time" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--time end-->
                                <!--venue-->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="venue">Venue</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="venue" name="appointmentVenue" class="form-control" placeholder="Enter appointment venue" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--venue end-->
                                <!-- dropdown -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="vaccine">Vaccine</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <select name="vaccine" class="form-control show-tick" required>
                                                <option value="" disabled selected hidden>Select vaccine</option>
                                                <?php
                                                    include("connection.php");

                                                    $query="SELECT * FROM vaccine";
                                                    $result = mysqli_query($con,$query);

                                                    if(mysqli_num_rows($result)>0){

                                                        while( $row = mysqli_fetch_assoc($result)){

                                                            $vacID = $row['vaccineID'];
                                                            $vacName = $row['vaccineName'];
                                                            ?>
                                                            <option value="<?php echo $vacID?>"><?php echo $vacName ?></option>

                                                        <?php
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- #dropdown end-->
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <a href="?action=appointment_date_set"><button type="button" name="back" class="btn btn-primary m-t-15 waves-effect">BACK</button>
                                        <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->