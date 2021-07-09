<?php

include'connection.php';

$stmt = $conn->prepare("INSERT INTO newthread(username, subject, comment)VALUES(?,?,?)");
$stmt->bind_param("sss", $username, $subject, $comment);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $username=test_input($_POST["username"]);
    $subject=test_input($_POST["subject"]);
    $comment=test_input($_POST["comment"]);
    $stmt->execute();
    
}
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data= htmlspecialchars($data);
    return $data;
}



