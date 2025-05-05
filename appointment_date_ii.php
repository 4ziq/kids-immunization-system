<?php
if (!isset($_SESSION)) {
    //header("Location: index.php"); 
    session_start();
}
error_reporting(0);
include('connection.php');

$session = $_SESSION['User'];
$tab_query = "SELECT * FROM child WHERE parentsIC = '$session' ";
$tab_result = mysqli_query($con, $tab_query);
$tab_menu = '';
$tab_content = '';
$i = 0;

while ($row = mysqli_fetch_array($tab_result)) {
    if ($i == 0) {
        $tab_menu .= '
   <li class="active"><a href="#' . $row["childIC"] . '" data-toggle="tab">' . $row["childName"] . '</a></li>
  ';
        $tab_content .= '
   <div id="' . $row["childIC"] . '" class="tab-pane fade in active">
  ';
    } else {
        $tab_menu .= '
   <li><a href="#' . $row["childIC"] . '" data-toggle="tab">' . $row["childName"] . '</a></li>
  ';
        $tab_content .= '
   <div id="' . $row["childIC"] . '" class="tab-pane fade">
  ';
    }

    $appt_query = "SELECT * FROM child,appointment WHERE child.childIC = appointment.childIC and child.childIC = '" . $row["childIC"] . "' ";
    $appt_result = mysqli_query($con, $appt_query);

    $tab_content .= '
 <table class="table table-bordered">
            <thead>
                <tr class="bg-info">
                    <th scope="col">Appointment ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                    <th scope="col">Venue</th>
                    <th scope="col">Status</th>                           
                </tr>
            </thead>';

    while ($appt_row = mysqli_fetch_array($appt_result)) {
        $apptid = $appt_row['appointmentID'];
        $timeformat = date("g:i a", strtotime($appt_row['appointmentTime']));
        if ($apptid == NULL) {
            $tab_content .= "no upcoming appointment";
        } else {

            if ($appt_row['appointmentStatus'] == "incomplete") {
                $tab_content .= '
	            <tbody>
					<tr>
						<td class="bg-red">' . $appt_row['appointmentID'] . '</td>
						<td class="bg-red">' . $appt_row['appointmentDate'] . '</td>
						<td class="bg-red">' . $timeformat . '</td>
						<td class="bg-red">' . $appt_row['appointmentVenue'] . '</td>   
                        <td style="text-align: center;"> <span class="badge bg-cyan">Incomplete</span> </td>                                   
					</tr>
				</tbody>
	            ';
            } else if ($appt_row['appointmentStatus'] == "complete") {
                $tab_content .= '
	            <tbody>
					<tr>
						<td class="bg-green">' . $appt_row['appointmentID'] . '</td>
						<td class="bg-green">' . $appt_row['appointmentDate'] . '</td>
						<td class="bg-green">' . $timeformat . '</td>
						<td class="bg-green">' . $appt_row['appointmentVenue'] . '</td>   
                        <td style="text-align: center;"> <span class="badge bg-cyan">Completed</span> </td>                                                          
					</tr>
				</tbody>
	            ';
            }
        }
    }
    $tab_content .= '</table></div>';
    $i++;
}
?>

<!-- Example Tab -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>APPOINTMENT DATE</strong>
                </h2>
            </div>
            <div class="body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                    <?php echo $tab_menu ?>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <?php echo $tab_content ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #END# Example Tab -->