<?php 
   if(!isset($_SESSION)) 
   { 
       session_start(); 
   }
    include("connection.php");
    //error_reporting(0);

    if(isset($_POST['submit'])){

        extract($_POST);
        $session = $_SESSION['Staff'];
        $vaccineRecordDate = date("Y-m-d");
        $childIC = $_GET['ic'];
        $vaccine = $_GET['vacid'];
        $sql = "INSERT INTO vaccinationrecord (vaccineRecordID, vaccineID, vaccineRecordDate, staffIC, childIC, childHeight, childWeight) VALUES ('NULL', '$vaccine', '$vaccineRecordDate', '$session', '$childIC', '$childHeight', '$childWeight')";
         //$result = ;

        $status_complete = 'complete';
        $appointmentID = $_GET['apptid'];
        $status_query="UPDATE appointment SET appointmentStatus='$status_complete' WHERE childIC='$childIC' AND appointmentID='$appointmentID'";

        if (mysqli_query($con,$sql) && mysqli_query($con,$status_query)){
            echo "<script type='text/javascript'> window.alert('Record has been added')</script>";
            echo "<script type='text/javascript'> window.location='?action=vaccine_record_add' </script>";
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
        }else{
            echo "<script type='text/javascript'> window.alert('Record cannot be added')</script>";
            echo "<script type='text/javascript'> window.location='?action=vaccine_record_add' </script>";
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
                                VACCINE RECORD
                            </h2>
                        </div>
                        <div class="body">
                            <form class="form-horizontal" method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="childHeight">Child Height</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="childHeight" class="form-control" placeholder="Enter Child Height" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="childWeight">Child Weight</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="childWeight" class="form-control" placeholder="Enter Child Weight" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- button -->
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <button type="submit" name="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                                    </div>
                                </div>
                                <!-- button -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->