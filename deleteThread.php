<?php

include_once 'connection.php';

$id=$_REQUEST['id'];
$query = "DELETE FROM newthread WHERE id=$id"; 
$result = mysqli_query($conn,$query);
header("Location: announcements2.php"); 
?>