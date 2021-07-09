<?php
session_start();    // this makes a new session
include_once 'connection.php';      // this connects to database
require 'headerCSS_1.php';      // this brings the header css into script 

// if logged in, a welcome message pops up
//if(isset($_SESSION['username'])){ 
//echo "Welcome " . $_SESSION['username']; // using their username variable
//}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


    


 <!--styling the page title -->   
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Welcome to The Theatre Company</h2>

      <!-- Introduction to website -->
      <p>Welcome to our new website.</p>
      <p>For up to date performances, reviews, news and chat, look no further.</p>
      <p>We have theatre shows, movie screenings and events posted throughout the year.</p>
      <p>The team at The Theatre Company x</p>
    </div>
      
  </div>
    
  
    
    <!-- column for my blog adverts -->  
  <div class="rightcolumn">
      <div class="card">
      <h3 class="h3">Latest Blog Posts</h3>
      <h5><p>1st June 2021</p><a href="announcements.php">Going forward</a></h5>   
      <h5><p>1st June 2021</p>Ludovico Einaudi: live from Royal Albert Hall</a></h5>
    
    </div>
    
  </div>
    
    
    
</div>
     
    </body>
</html>

<!-- including footer PHP in a file -->
<?php
include 'footerCSS.php';
?>