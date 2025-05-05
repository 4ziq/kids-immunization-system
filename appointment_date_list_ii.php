<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
error_reporting(0);
include('connection.php');

$appt_query = "SELECT * FROM appointment, child, vaccine, parents WHERE appointment.childIC = child.childIC AND appointment.nextVaccine = vaccine.vaccineID AND child.parentsIC = parents.parentsIC 
                ORDER BY appointment.appointmentID DESC";      
$appt_result = mysqli_query($con,$appt_query);

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                LIST OF APPOINTMENT DATE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Child Name</th>
                                            <th>IC</th>
                                            <th>Parents Name</th>
                                            <th>Phone Number</th>
                                            <th>Email</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Vaccine</th>
                                            <th>Venue</th>
                                            <th>Status</th>
                                            <th hidden>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while($appt_row = mysqli_fetch_array($appt_result)){
                                        $apptid = $appt_row['appointmentID'];
                                        $apptdate = $appt_row['appointmentDate'];
                                        $appttime = $appt_row['appointmentTime'];
                                        $apptvenue = $appt_row['appointmentVenue'];
                                        $vacid = $appt_row['vaccineID'];
                                        $vacname = $appt_row['vaccineName'];
                                        $childic = $appt_row['childIC'];
                                        $childname = $appt_row['childName'];
                                        $status = $appt_row['appointmentStatus'];
                                        $parentsname = $appt_row['parentsName'];
                                        $parentsphone = $appt_row['parentsPhoneNum'];
                                        $parentsemail = $appt_row['parentsEmail'];

                                        $timeformat = date("g:i a", strtotime($appttime));
                                        ?>
                                        <tr>
                                            <td><?php echo $apptid ?></td>
                                            <td><?php echo $childname ?></td>
                                            <td><?php echo $childic ?></td>
                                            <td><?php echo $parentsname ?></td>
                                            <td><?php echo $parentsphone ?></td>
                                            <td><?php echo $parentsemail ?></td>
                                            <td><?php echo $apptdate ?></td>
                                            <td><?php echo $timeformat ?></td>
                                            <td><?php echo $vacname ?></td>
                                            <td><?php echo $apptvenue ?></td>
                                            <td hidden><?php echo $status ?></td>
                                            <?php
                                                 if($status=="incomplete"){
                                                    ?>
                                                    <td><span class="badge bg-red">Incomplete</span></td>
                                                    <?php
                                                 }else{
                                                    ?>
                                                    <td><span class="badge bg-green">Complete</span></td>
                                                    <?php
                                                 }
                                            ?>
                                            
                                           
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
            </div>
            <!-- #END# Basic Examples -->