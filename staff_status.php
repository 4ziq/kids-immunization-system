<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
}
//error_reporting(0);
include('connection.php');

$staff_query = "SELECT * FROM staff";
$staff_result = mysqli_query($con,$staff_query);

?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               <strong>STAFF STATUS</strong>
                            </h2>
                            <!--<ul class="header-dropdown m-r--5">
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
                            </ul>-->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>IC</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while($staff_row = mysqli_fetch_array($staff_result)){
                                        
                                        $name=$staff_row['staffName'];
                                        $ic=$staff_row['staffIC'];
                                        $email=$staff_row['staffEmail'];
                                        $status=$staff_row['staffStatus'];
                                        ?>
                                        <tr>
                                            
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $ic ?></td>
                                            <td><?php echo $email ?></td>
                                            <?php
                                                 if($status=="Active"){
                                                    ?>
                                                    <td><span class="badge bg-green">Active</span></td>
                                                    <?php
                                                 }else{
                                                    ?>
                                                    <td><span class="badge bg-red">Inactive</span></td>
                                                    <?php
                                                 }
                                            ?>
                                            <td align=center><a href="?action=change_engine&staffic=<?php echo $ic ?>&staffstatus=<?php echo $status?>"><button class="btn btn-primary" name="change" type="button" onClick="javascript: return confirm('Are you sure to change the status of <?php echo $name ?>');">Change Status</button></a></td>
                                        </tr>
                                    <?php
                                    }
                                    /*if(isset($_GET['staffic']) && isset($_GET['staffstatus'])){
                                        $ic=$_GET['staffic'];
                                        $status=$_GET['staffstatus'];

                                        if($status=='Active'){
                                            $change_query="UPDATE staff SET staffStatus='Inactive' WHERE staffIC = '$ic'";
                                            $change_result=mysqli_query($con,$change_query) or mysqli_error($change_query);

                                            if($change_result){
                                                echo "<script> window.alert('Staff Status is successfully changed.')</script>";
                                                echo "<script type='text/javascript'> window.location='?action=staff_status.php' </script>";
                                                echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                                            }else{
                                                echo "<script> window.alert('Failed to change staff status.')</script>";
                                                echo "<script type='text/javascript'> window.location='?action=staff_status.php' </script>";
                                                echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                                            }
                                        }
                                        else if($status=='Inactive'){
                                            $change_query="UPDATE staff SET staffStatus='Active' WHERE staffIC = '$ic'";
                                            $change_result=mysqli_query($con,$change_query);

                                            if($change_result){
                                                echo "<script> window.alert('Staff Status is successfully changed.')</script>";
                                                echo "<script type='text/javascript'> window.location='?action=staff_status.php' </script>";
                                                echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                                            }else{
                                                echo "<script> window.alert('Failed to change staff status.')</script>";
                                                echo "<script type='text/javascript'> window.location='?action=staff_status.php' </script>";
                                                echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
                                            }
                                        }
                                    }*/
                                    ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->