<?php

include_once 'connection.php';

$threadid=$_REQUEST['threadid'];
$query = "DELETE FROM newthread WHERE threadid=$threadid"; 
$result = mysqli_query($conn,$query);
header("Location: processThread.php"); 
?>