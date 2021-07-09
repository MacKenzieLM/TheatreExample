<?php
require 'headerCSS_1.php';
include_once'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Charmonman' rel='stylesheet'> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
   <body>
    <style>  
      
      .body
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }
    .active{
        width:100%;
    }
    
    .carousel{
        width:50%;
    }
   

    </style>

   
    
      <div class="container">
     <br>
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
         <ol class="carousel-indicators">
        <li data-target="ballet-600.webp" data-slide-to="0" class="active"></li> 
        <li data-target="performance-600.webp" data-slide-to="1" class="active"></li>  
        <li data-target="theatre-inside-600.webp" data-slide-to="2" class="active"></li>  
        
     
     </ol>
             
     <div class="carousel-inner">
      <div class="item active">
        <img src="ballet-600.webp" alt="The Ballet" style="width:100%;">
      </div>

      <div class="item">
        <img src="performance-600.webp" alt="A performance" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="theatre-inside-600.webp" alt="The theatre" style="width:100%;">
            
             
     <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>         
       
       </div>
    </div>    
     </div>
</div>   
        
   </body><!-- comment -->
</html>



  



<script>
   function pageTopnav()
   {
       var nav = document.getElementById("pageTopnav");
       if(nav.className === "pageTopnav")
       {
           nav.className += " responsive";
           }
            else
            {
                nav.className = "pageTopnav";
                }
    }
 </script>   
</body>
</html>


<!-- including footer PHP in a file -->
<?php
include 'footerCSS.php';
?>
