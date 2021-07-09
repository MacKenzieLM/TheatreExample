<?php
session_start();    // this makes a new session
require 'headerCSS_1.php';   // this brings the header css into script 
include_once 'connection.php'; // this connects to database 

$stmt = $conn->prepare("INSERT INTO newthread(usernameposting,subject,threadmessage)VALUES(?,?,?)");
$stmt->bind_param("sss", $usernameposting,$subject,$threadmessage);
?>


<!DOCTYPE html>
<html>
    <head>
        <style>
            
/*styling the announcements*/

/* column*/
.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
/* grid layout */
.grid-container {
  display: grid;
  grid-template-columns: auto ;
  grid-template-rows: auto;
  padding: 10px;
}
/* grid layout item */
.grid-item {
  background-color: #daceb7;
  border: 5px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 15px;
  text-align: left;
} 
/* red buttons*/
.button {
  background-color: #A31414;
  border-radius: 4px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
    </head>

  <!--styling the page title -->
<div class="container" >
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Announcements / Blog</h2>   
<a href="postAThread.php" class="button">Post a thread</a>

<?php
//echo "<table style='border: solid 2px black;'>"; // this brings the table to screen
//$sql = "SELECT * FROM newthread (usernameposting,subject,threadmessage) VALUES (?, ?, ?)";
//$result = mysqli_query($conn, $sql); // check
$mysqli_query="SELECT FROM newthread(usernameposting,subject,threadmessage)
        VALUES(?,?,?)";
 $result=$conn->query($mysqli_query);    
  $i=1;
//while($row = mysqli_fetch_array($result)) {
while($row=$result->fetch_assoc()){
    ?>
 <div class="grid-container"> 
  <div class="grid-item">
     <a href="goingForward.php" class="button">Reply</a> <a href="allCommentsForward_1.php" class="button">Comment thread</a>     
<tr>
    <td><h2><?php echo $row["subject"];?></h2> 
     <?php echo $row["usernameposting"];?> <br>
     <?php echo $row["threadmessage"];?> <br>
    <br><?php echo $row["datetime"]; ?>
    <br>
    <br>
    
   </div> 
  </div>
</div>
<?php
$i++;
}
     $conn->close();
       ?>


<!-- details about going forward announcement --> 
 <div class="grid-container"> 
  <div class="grid-item">
      <a href="goingForward.php" class="button">Reply</a> <a href="allCommentsForward_1.php" class="button">Comment thread</a>
      <h3>2021 Going forward</h3> 
<span>24th May 2021</span>
<p>Well, what a year it has been.  The arts have been badly affected 
    by the corona virus <br>
    and we are no different.
    As you can imagine, 
the team at The Theatre Company <br>
are busy re-scheduling performances to welcome you back.
</p>    
  </div> </div>

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
</div>
 
<!-- more styling for container  -->
<div class="container" >
<div class="row">
  <div class="leftcolumn">
    <div class="card">  
     
     </div> 
 </div>
</div>
</div>
</html>  
<?php // including the css for the footer
include 'footerCSS.php'; 
?>


      
       
