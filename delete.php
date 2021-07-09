<?php

include_once 'connection.php';

$id=$_REQUEST['id'];
$query = "DELETE FROM userreg WHERE id=$id"; 
$result = mysqli_query($conn,$query);
header("Location: view.php"); 
?>