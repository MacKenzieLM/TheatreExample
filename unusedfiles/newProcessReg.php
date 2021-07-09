<?php
include_once('connection.php');

$sql = "INSERT INTO userreg(username,password)VALUES(?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param("ss", $username, $hash);

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    
    $hash = password_hash($password, PASSWORD_DEFAULT);  
    if ($username===""||$password===""){
        echo "Username and password cannot be blank";
    }else{
         $stmt->execute();
         echo "$Success";
     }   
    }
    // security measures to test the user's input
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// close database connection
$stmt->close();
 $conn->close();       
 ?>
}