<?php


if(!isset($_SESSION['usertype'])){
    header("Location:login.php");
}

$suspend = "1";

if ($suspend =="1") {
  echo "You cannot post here at the moment!";
}
?>