<?php

include_once 'connection.php';

$id=$_REQUEST['id'];
$query = "DELETE FROM moustrapcomments WHERE id=$id"; 
$result = mysqli_query($conn,$query);
header("Location: mousetrapReview2.php"); 
?>
