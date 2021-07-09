<?php
session_start();
if(!isset($_SESSION['username']))
header("Location:login.php");

require 'headerCSS_1.php' ;
include_once 'connection.php';

?>
     


<!DOCTYPE html>
<html>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Post Thread</h2>   
      <p> Post your thread below.  Remember, keep it respectful.</p>
   
      <form action="processNewThread.php" method="post"> 
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


