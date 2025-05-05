<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
//error_reporting(0);
include('connection.php');

$name = $_GET['name'];
$ic = $_GET['ic'];

$vaccine_query = "SELECT * FROM vaccinationrecord, vaccine, admin WHERE vaccinationrecord.vaccineID = vaccine.vaccineID AND vaccinationrecord.adminIC = admin.adminIC AND vaccinationrecord.childIC = '$ic'";
$vaccine_result = mysqli_query($con,$vaccine_query);

?>

<!-- Condensed Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    VACCINATION RECORD FOR <?php echo $name ?>
                </h2>
                
            </div>
            <div class="body table-responsive">
                <table class="table table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th>Vaccine</th>
                            <th>Date</th>
                            <th>Nurse Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($vaccine_row=mysqli_fetch_array($vaccine_result)){

                            ?>
                            <tr>
                                <td><?php echo $vaccine_row['vaccineName'] ?></td>
                                <td><?php echo $vaccine_row['vaccineRecordDate'] ?></td>
                                <td><?php echo $vaccine_row['adminName'] ?></td>
                            </tr>
                            
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</div>
<!-- #END# Condensed Table -->