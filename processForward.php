<?php
require'headerCSS_1.php';
include_once'connection.php';

$stmt = $conn->prepare("INSERT INTO commentsforward(username,comment)VALUES(?,?)");
$stmt->bind_param("ss", $username, $comment);

if($_SERVER["REQUEST_METHOD"]==="POST"){

    $username = test_input($_POST['username']);
    $comment= test_input($_POST['comment']);
      
    //Insert to Mysqli Query 
    //use the sanitised inputs 
    $sql = "INSERT INTO commentsforward (username,comment) VALUES ('$username','$comment')";
    $result = mysqli_query($conn, $sql); // check
        
        
}

// security measures to test the user's input
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// close database connection
 $conn->close();       
 ?>
    





