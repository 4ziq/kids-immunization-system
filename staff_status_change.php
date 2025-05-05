<?php
include("connection.php");
$ic=$_GET['staffic'];
$status=$_GET['staffstatus'];

if($status=='Active'){
    $change_query="UPDATE staff SET staffStatus='Inactive' WHERE staffIC = '$ic'";
    $change_result=mysqli_query($con,$change_query) or mysqli_error($change_query);

    if($change_result){
        echo "<script> window.alert('Staff Status is successfully changed.')</script>";
        echo "<script type='text/javascript'> window.location='?action=staff_status' </script>";
        //echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
    }else{
        echo "<script> window.alert('Failed to change staff status.')</script>";
        echo "<script type='text/javascript'> window.location='?action=staff_status.php' </script>";
        //echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
    }
}
else if($status=='Inactive'){
    $change_query="UPDATE staff SET staffStatus='Active' WHERE staffIC = '$ic'";
    $change_result=mysqli_query($con,$change_query);

    if($change_result){
        echo "<script> window.alert('Staff Status is successfully changed.')</script>";
        echo "<script type='text/javascript'> window.location='?action=staff_status' </script>";
        //echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
    }else{
        echo "<script> window.alert('Failed to change staff status.')</script>";
        echo "<script type='text/javascript'> window.location='?action=staff_status.php' </script>";
        //echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
    }
}


?>