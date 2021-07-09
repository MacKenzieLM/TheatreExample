<?php
session_start();
require '../headerCSS_1.php' ;
include_once '../connection.php';


?>

<!--styling the page title -->
 <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Contact Form</h2> 
      <p>Here we are!</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2619.915714748944!2d-
        3.3146882668184876!3d57.64482733072451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
        1s0x48850a532877b5f5%3A0xe0f1edaa60274cc1!2sMoray%20College%20UHI!5e0!3m2!1sen!2suk!
        4v1623323616526!5m2!1sen!2suk" 
        width="400" height="300" style="border:0;" allowfullscreen="" ></iframe>
<br>
  <p>Send a message using our contact form below.</p>
      
<div class="container">
  <form action=../processContact.php method="post">
  
    <label for="fullname">Full Name</label>
    <input type="text" id="fullname" name="fullname" required=""><p></p>

    <label for="email">Email Address</label>
    <input type="email" id="email" name="email" required=""> <p></p>
    
     <label for="changeEvent">Country</label>
    <select id="changeEvent" name="country">
        <option value="country">Country</option>
    <option value="Scotland">Scotland</option>
     <option value="England">England</option>
      <option value="Ireland">Ireland</option>
       <option value="Wales">Wales</option>
    </select> 
     <div id="output"></div>
    <p></p>
    
    <label for="message">Message</label><p></p>
    
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
    <p></p>
   
    <br>
   
   <input type="submit" id="submitExample" value="Submit">
   </form>
</div>



    </div>
   
  </div>
  <div class="rightcolumn">
   
    
    </div>
<!--   submit event-->
<script>
    //change event
document.getElementById("changeEvent").addEventListener("change", changeFunction);    
function changeFunction(){
    var output = document.getElementById("changeEvent").value;
    document.getElementById("output").innerHTML = "You have chosen " + output;
}     
// submit event    
document.getElementById("submitExample").addEventListener("submit",submitFunction);
function submitFunction(){
    alert("Your contact form was submitted.");
}
</script>
  </div>
<?php // including the css for the footer
include 'footerCSS.php'; 
?>   