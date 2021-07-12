<?php
 session_start();
 session_unset();
 session_destroy();
require 'headerCSS_1.php' ;



?>

<!--styling the page title -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Log out</h2>
      
    
    <p>So long, farewell, Auf Wiedersehen, goodbye.</p>


    </div>  
  </div>  
</div>

<script>
// alert pop up event
document ("logout");
function alertFunction(){
    alert("You have now logged out");
}
</script>
<?php // including the css for the footer
include 'footerCSS.php'; 
?>
