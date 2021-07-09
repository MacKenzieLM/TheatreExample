<?php
require 'headerCSS_1.php' ;
include_once 'connection.php';
?>

<!DOCTYPE>
<html>
    <head>
        <style>
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
</style>
    </head>
</html>


   <!--styling the page title --> 
 <div class="row">
 
    <div class="card">
      <h2 class="h2">Performances</h2>
    
<div class="row">
  <div class="column">
      <a href="mousetrapReview2.php">
    <img src="mousetrap.jpg" alt="The Mousetrap" style="width:50%"> 
      </a><p>The Mousetrap</p>
       <p>1st-5th November 2020</p>
       <p>7.30PM</p>
       <p>&pound; 15.00</p>   
        <button id="windowExample">Click here for more information about Agatha Christie</button>    
  </div>
    
  <div class="column">
    <img src="charleysaunt.jpeg" alt="Charley's Aunt" style="width:50%">
    <div id="content">
        <p>Charley's Aunt<br>
        <br>10th-15th November 2020<br>
        <br>7.30PM<br>
        <br>&pound; 15.00</p>
  </div>
  </div>
    
  <div class="column">
    <img src="death.jpeg" alt="Death of a salesman" style="width:50%">
    <p id="buttonExample">Death Of A Salesman<br>
        <br>20th-30th November 2020<br>
        <br>7.30PM<br>
    <br>&pound; 15.00</p>
   
  </div>
      
      </div>
    </div>       
</div>
      
<script>  
// window event
document.getElementById("windowExample").addEventListener("click",windowFunction);   
function windowFunction(){
    window.open("https://www.agathachristie.com/");
}
// mouse event
document.getElementById("buttonExample").addEventListener("mousedown", clickFunction);
function clickFunction(event){
    event.target.style.fontSize = "2em";
} 

// touch event
document.getElementById("content").addEventListener("touchstart", touchFunction);
function touchFunction(event){
    event.target.style.color = "red";
} 
</script>
           
<?php // including the css for the footer
include 'footerCSS.php'; 
?>

