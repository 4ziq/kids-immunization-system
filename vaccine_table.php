<?php
$name = $_GET['name'];
?>
<div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2><strong>VACCINATION RECORD FOR <?php echo $name ?></strong></h2>
                                </div>
                                <div class="col-xs-12 col-sm-6 align-right">
                                    
                                </div>
                            </div>
                           
                        </div>
                        <div class="body">
                         
                       
<?php
  include('connection.php');
	

echo '<table width="100%" border="0" cellspacing="0" cellpadding="0" id="datatable" class="table table-bordered">
  <thead>
  <tr class="bg-info">
    <td align="center"><strong>Age (Month)</strong></td>
    <td align="center"><strong>Vaccine</strong></td>
	<td align="center"><strong>Date</strong></td>
	<td align="center"><strong>Batch No</strong></td>
  </tr>
  </thead>
  <tbody>';
	
$tab_query = "SELECT childAge ,vaccineName,vaccineID FROM vaccine ORDER BY childAge ";
$tab_result = mysqli_query($con, $tab_query);
$last = "";
$dt = "";
$childic = $_GET['ic'];

while($row = mysqli_fetch_array($tab_result))
{
	 $sql = "SELECT count(1) as cnt FROM vaccine where childAge = ".$row['childAge'];
	 $result = $con->query($sql);
     //sql untuk date
     $sql_date = "SELECT vaccineRecordDate FROM vaccinationrecord WHERE childIC = '$childic' AND vaccineID = '".$row['vaccineID']."'";
	 $result_date = $con->query($sql_date);
     
    if(empty($result_date)){
        $dt = "-";
    }else
    {
        if($rowdt = mysqli_fetch_assoc($result_date)){
            $dt = $rowdt['vaccineRecordDate'];
        }else{
            $dt = "-";
        }
    }
     /*if($rowdt = mysqli_fetch_assoc($result_date)!=null){
        echo "here";
       // if($rowdt = mysqli_fetch_assoc($result_date)){
            $dt = $rowdr['vaccineRecordDate'];
      //  }
     }*/

	 if($rowspan = mysqli_fetch_array($result))
		{
			$cnt = $rowspan['cnt'];
		}
		
		$now=$row[0];

echo '<tr>';

if($last!=$now) 
{
	echo '<td rowspan='.$cnt.' align="center">'.$row['childAge'].'</td>';
}
$last = $row[0];

	echo '<td> &nbsp;' .$row['vaccineName'].'</td>';
	echo '<td align="center">'.$dt.'</td>';
	echo '<td align="center"></td>';
	echo '</tr>';

}
	echo '</tbody></table>';


?>
<BR><BR>
<div class="row clearfix">
    <div class="m-l-10">
        <button action="action" onclick="window.history.go(-1); return false;" type="submit" name="back" class="btn btn-primary m-t-15 waves-effect">BACK</button>
        
   </div>
</div>

                        </div>
                    </div>
                </div>
            </div>