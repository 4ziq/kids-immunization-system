<?php

if(!isset($_SESSION)) 
{ 
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
while($row = mysqli_fetch_array($tab_result))
{
 if($i == 0)
 {
  $tab_menu .= '
   <li class="active"><a href="#'.$row["childIC"].'" data-toggle="tab">'.$row["childName"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["childIC"].'" class="tab-pane fade in active">
  ';
 }
 else
 {
  $tab_menu .= '
   <li><a href="#'.$row["childIC"].'" data-toggle="tab">'.$row["childName"].'</a></li>
  ';
  $tab_content .= '
   <div id="'.$row["childIC"].'" class="tab-pane fade">
  ';
 }
 
 $record_query = "SELECT * FROM child,vaccinationrecord,vaccine,admin WHERE child.childIC = vaccinationrecord.childIC AND vaccinationrecord.vaccineID = vaccine.vaccineID AND vaccinationrecord.adminIC = admin.adminIC AND child.childIC = '".$row["childIC"]."' ";
 $record_result = mysqli_query($con, $record_query);
 
 $tab_content .= '
 <table class="table">
            <thead>
                <tr>
                    <th scope="col">Vaccine</th>
                    <th scope="col">Date</th>
                    <th scope="col">Nurse Name</th>                          
                </tr>
            </thead>';
 
 while($record_row = mysqli_fetch_array($record_result))
 {
	 $recid = $record_row['vaccineRecordID'];
	 
	  $tab_content .= '
	  <tbody>
					<tr>
						<td>'.$record_row['vaccineName'].'</td>
						<td>'.$record_row['vaccineRecordDate'].'</td>
						<td>'.$record_row['adminName'].'</td>                                                           
					</tr>
				</tbody>
	  ';
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
                                <strong>VACCCINATION RECORD</strong>
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