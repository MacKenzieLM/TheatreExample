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


$count=1;
$usertype = "admin"; 
$upgrade= "1";
$mysqli_query="SELECT * FROM newthread";
        
//      "Select userreg.id,newthread.comment,newthread.datetime,userreg.username, userreg.usertype, newthread.username from newthread, userreg "
//       . "WHERE newthread.username=userreg.username";
$result = mysqli_query($conn,$mysqli_query);

while($row = mysqli_fetch_assoc($result)) { 
    
if(!$username=="admin" || !$upgrade=="1"){
    header("location:announcements2.php");
    echo "Sorry you don't have permission to post a thread";
}else{
  
     $row["id"]; ?><br>
   
        <?php echo $row["username"]; ?><br>
       <?php echo $row["comment"]; ?><br>
       <?php echo $row["datetime"]; ?><br>

    
<a href="editThreadForward.php?id=<?php echo $row["id"]; ?>">Edit</a>
<a href="deleteCommentsForward.php?id=<?php echo $row["id"]; ?>">Delete</a>
<?php  $count++; 
}} ?>
 


