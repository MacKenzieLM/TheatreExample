<?php
require 'headerCSS_1.php' ;
include_once 'connection.php';
//if(!isset($_SESSION['username'])){
//    header("Location:login.php");
//}
$stmt = $conn->prepare("INSERT INTO replyforw(replyusername,replymessage)VALUES(?,?)");
$stmt->bind_param("ss", $replyusername, $replymessage);


?>
 
<!DOCTYPE html> 
<head>
    
</head>
<body>
    <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Reply to thread</h2> 
      <form action="processForwardReply.php" method="post"></form>
       <input type="hidden" name="reply" value="<?php echo $replyid;?>">
               
    <input class="u-full-width" type="text" placeholder="Username" name="replyusername" required> <p></p>
    <br><!-- comment -->
     <p>Enter your reply</p> 
     <textarea class="input-field" name="replymessage"
                  id="replymessage" placeholder="Add a reply"> </textarea> 
    <br>
  <p><a href="allCommentsForward_1.php" class="button-primary">Post comment</a></p>
<!--    <input class="button-primary" type="submit" value="Post comment"> -->
    <?php
       $query = "SELECT * FROM replyforw WHERE replyusername='$replyusername' AND password='$password' LIMIT 1";
$results = mysqli_query($conn, $query); 
//    $mysqli_query="SELECT replyusername,replymessage FROM replyforw WHERE ";
//    $result = mysqli_query($mysqli_query);   
        
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        $replyusername = test_input($_POST['replyusername']);
        $replymessage = test_imput($_POST['replymessage']);
        
    
     $sql = "INSERT INTO replyforw (replyusername, replymessage) VALUES ('$replyusername','$replymessage')";
     $result = mysqli_query($conn,$sql); // check
  $row = mysqli_num_rows($result); // remove 23.39
         
  
    $count=1;

while($row = mysqli_fetch_assoc($result)) 
{ 
//   if($results['replymessage']==''){ // remove 23.39
 echo $row["replyusername"]; ?><br>
        <?php echo $row["replymessage"]; ?>
    <?php echo $row["datetime"]; ?>
<?php  
$count++; 
   }  }
  ?>
    
    </div>
  </div>
    </div>
    </body>
</html>
<?php // including the css for the footer
include 'footerCSS.php'; 
?>  