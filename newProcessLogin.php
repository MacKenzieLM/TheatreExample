<?php
require_once('connection.php');
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=test_input($_POST["username"]);
    $password=test_input($_POST["password"]);
    
    $query=mysqli_query($conn, "SELECT * FROM userreg WHERE username = '$username'");
    $rows-=mysqli_fetch_assoc($query);
    $row=mysqli_num_rows($query);
    
if(password_verify($password,$rows['password'])&&$row==1){
$_SESSION['username']=$rows['username'];
header("Location; index.php");
    }else{
        echo "Invalid password, please try again";
    }
  }
  
  function test_input($data){
      $data=trim($data);
      $data=stripslashes($data);
      $data=htmlspecialchars($data);
      return $data;
  }
  ?>