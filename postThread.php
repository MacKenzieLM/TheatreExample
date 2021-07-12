<?php
session_start();
if(!isset($_SESSION['username'])){
header("Location:login.php");
}

require 'headerCSS_1.php' ;
include_once 'connection.php';


//if(!isset($_SESSION['usertype'])){
//    header("location:announcements2.php");
//} 

$mysqli_query="update * from userreg ";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { 
    $usertype = "admin";
    $suspend = "1";
    $upgrade = "1";
    $deleted = "1";
        if (!$usertype =="admin") {
        echo "Sorry, only admin can post new threads!";
        header("location: announcements2.php");
        }else{
            if($usertype == "user" && $upgrade == "1"){
        echo "You can post a thread or keep commenting.";
        }else{
            if($usertype == "user" && $suspend == "1"){
            echo "Sorry, you can not post a thread or comment.";
            }else{
                if($usertype == "user" && $deleted == "1"){
                echo "Sorry, you can not post a thread or comment.";
                }else{
   
        
    



 $row["id"]; ?><br>
        <?php echo $row["username"]; ?><br>
       <?php echo $row["comment"]; ?><br>
       <?php echo $row["datetime"]; ?><br>
<a href="editThreadForward.php?id=<?php echo $row["id"]; ?>">Edit</a>
<a href="deleteCommentsForward.php?id=<?php echo $row["id"]; ?>">Delete</a>
<?php  $count++; 
 } 
  } 
    }
      }
        }?>



<!DOCTYPE html>
<html>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Post Thread</h2>   
      <p> Post your thread below.  Remember, keep it respectful.</p>
   
      <form action="announcements2.php" method="post"> 
          <input type="hidden" name="id" id="id" value="0" />  
          
        <label for="username">Username</label>
        <p></p>
        <input type="text" id="username" name="username" > 
<p></p>
        <label for="subject">Subject</label>
        <p></p>
        <input type="text" id="subject" name="subject" > 
        
        <p></p>
        <label for="comment">Comment</label>
        <p></p>
        <textarea id="comment" name="comment" placeholder="Write something.." style="height:250%; width:50%"></textarea><p></p>

  
<input type="submit" id="submit" value="Submit">

 </form> 
<!--      <p><a href="announcements2.php" class="button-primary">Submit</a></p>-->

      
   </div>
  </div>
 </div>  
    <script>
// submit event
document.getElementById("submitExample").addEventListener("submit",submitFunction);
function submitFunction(){
    alert("Your post was submitted.");
} 
     </script>   
</html>

<!-- including footer PHP in a file -->
<?php
include 'footerCSS.php';
?>


