<?php
  $con=mysqli_connect('localhost','root','','fyp');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
	
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="datatable" hidden>
  <thead>
  <tr>
    <td>Date</td>
    <td>Weight</td>
    <td>Height</td>
  </tr>
  </thead>
  <tbody>
<?php
$ic = $_GET['ic'];	
$tab_query = "SELECT childIC, vaccineRecordDate AS TRKH, childHeight AS tinggi, childWeight as berat FROM vaccinationrecord WHERE childIC = '$ic' ORDER BY vaccineRecordDate ";
$tab_result = mysqli_query($con, $tab_query);


while($row = mysqli_fetch_array($tab_result))
{
?>
<tr>
    <td><?php echo $row['TRKH']?></td>
    <td><?php echo $row['berat']?></td>
    <td><?php echo $row['tinggi']?></td>
  </tr>
  	
<?php 

}

?>
</tbody>
  
</table>


<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'line'
    },
			 credits: {
			enabled: false
		  },
    title: {
        text: 'Summary Of Child Growth'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Cm/Kg'
        }
    },
	plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>
<div class="row clearfix">
    <div class="m-l-10">
       <button action="action" onclick="window.history.go(-1); return false;" type="submit" name="back" class="btn btn-primary m-t-15 waves-effect">BACK</button>
        
   </div>
</div>
