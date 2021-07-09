<?php
require'headerCSS_1.php';
include_once'connection.php';

if(!isset($_SESSION['usertype'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head></head>
<body>

<!--styling the initial wording -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      
  </div>
  </div>
 </div>  
   
 <div class="container">
     <div class="card">    
    
<?php
$suspend = "1";

if ($suspend =="1") {
  echo "You cannot post here at the moment!";
}
?>
     </div><!-- comment -->
 </div>
     </body>
</html>
<?php
require'footerCSS.php';
?>