<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
     
    error_reporting(0);
    session_destroy();
    echo "<script> window.location.href='index.php' </script>";
?>