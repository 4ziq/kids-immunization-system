<?php

    $con=mysqli_connect('localhost','root','','fyp');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
    
?>