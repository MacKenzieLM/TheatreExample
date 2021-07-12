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
$suspend = "1";
$delete = "1";
$upgrade = "1";

$mysqli_query="Select userreg.usertype,newthread.username from  userreg, newthread"
        . "WHERE usertype = 'admin'";
$result = mysqli_query($conn,$mysqli_query);

while($row = mysqli_fetch_assoc($result)) { 
    
if(!$usertype=="admin"){
    header("location:announcements2.php");
}else{
    if(!$suspend == "1"){
        
    }
    
     $row["id"]; ?><br>
   
        <?php echo $row["username"]; ?><br>
       <?php echo $row["comment"]; ?><br>
       <?php echo $row["datetime"]; ?><br>

    
<a href="editThreadForward.php?id=<?php echo $row["id"]; ?>">Edit</a>
<a href="deleteCommentsForward.php?id=<?php echo $row["id"]; ?>">Delete</a>
<?php  $count++; 
}} 
 

 //security measures to test the user's input
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// close database connection
 $conn->close();       
 ?>
    




