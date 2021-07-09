<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location:announcements2.php");
}


require 'headerCSS_1.php' ;
include_once 'connection.php';



?>
<!DOCTYPE html>
<html>
    <head>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Announcements/Blog</h2>   <a href="postThread.php" class="button">Post a thread</a>
  
 <div class="grid-container"> 
  <div class="grid-item">
     
      <h3>2021 Going forward</h3> 
<span>24th May 2021</span>
<p>Well, what a year it has been.  The arts have been badly affected 
    by the corona virus and we are no different.
    As you can imagine, the team at The Theatre Company 
are busy re-scheduling performances to welcome you back.</p>

  
  </div> </div>   
             

<h3>Going forward comments thread</h3> <?php
$stmt = $conn->prepare("INSERT INTO commentsforward(username, comment)VALUES(?,?)");
$stmt->bind_param("ss", $username, $comment);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $username=test_input($_POST["username"]);
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

$mysqli_query="Select * from commentsforward ";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { 
$suspend = "1";

if ($suspend =="1") {
  echo "You cannot post here at the moment!";
}else{

     $row["id"]; ?><br>
        <?php echo $row["username"]; ?><br>
       <?php echo $row["comment"]; ?><br>
       <?php echo $row["datetime"]; ?><br>
<a href="editThreadForward.php?id=<?php echo $row["id"]; ?>">Edit</a>
<a href="deleteCommentsForward.php?id=<?php echo $row["id"]; ?>">Delete</a>
<?php  $count++; 
} }?>
     

      <h2 class="h2">Comment here </h2>   
      <p> Post your comments below.  Remember, keep it respectful.</p>
   
   
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">                
          <input type="hidden" name="id" id="id" value="0" />    
          <label for="username">Username</label>
    <p></p>
    <input type="text" id="username" name="username" > 

    <p></p>
     <label for="comment">Comment</label>
     <p></p>
    <textarea id="comment" name="comment" placeholder="Write something.." style="height:250%; width:50%"></textarea><p></p>

  
<input type="submit" id="submit" value="Submit">

 </form> 
 

     <!-- details about ludovico einaudi announcement --> 
      <div class="grid-container">
  <div class="grid-item">
     
    <h3>Ludovico Einaudi: live from Royal Albert Hall</h3>
    <span>1st June 2021</span>
    <p>We will be live streaming this concert by renowned pianist Ludovico Einaudi. <br> 
        Here is a video to get you acquainted if you are unfamiliar with his work.</p>
      
    
    <!-- inserting the video and ensuring responsiveness -->
   <div class="videoResize">
   <iframe
    width="560"
    height="315"
    src="https://www.youtube.com/embed/xPXWxPdQMSw"

    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen
  ></iframe>
   </div> 
      </div>

</div>
    
 </div>
     
      
    </div>
   </div>
  
 
<!-- more styling for container  -->
<div class="container" >
<div class="row">
  <div class="leftcolumn">
    <div class="card">  
  <h2 class="h2">New thread</h2>       
 <?php       
$count=1;
$mysqli_query="Select * from newthread ";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { ?>
    <?php  $row["id"]; ?><br>
        <?php echo $row["username"]; ?><br>
         <?php echo $row["subject"]; ?><br>
       <?php echo $row["comment"]; ?><br>
       <?php echo $row["datetime"]; ?><br>
<!--<a href="editThreadForward.php?id=<?php echo $row["id"]; ?>">Edit</a>
<a href="deleteCommentsForward.php?id=<?php echo $row["id"]; ?>">Delete</a>-->
<?php  $count++; 
} ?>  
     

    
        
     </div> 
 </div>
</div>
</div>
</body>
 <script>  
//gets all the elements with the class name confirmDelete
        var elements = document.getElementsByClassName("confirmDelete");
        
        for(var i = 0; i < elements.length; i++){
//        for each instance, add an event listener
//        listen for click, activate confirmDelete function,
elements[i].addEventListener("click", confirmDelete);
}

function confirmDelete(e){
// prompt the user if they want to cancel, stop the navigation
if(!confirm("Do you want to delete this user?")){
    e.preventDefault();
}
}
</script>
</html>  
<?php // including the css for the footer
include 'footerCSS.php'; 
?>