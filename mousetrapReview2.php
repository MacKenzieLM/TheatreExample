<?php
session_start();
require 'headerCSS_1.php' ;
include_once 'connection.php';
if(!isset($_SESSION['username'])){
    header("Location:mousetrapReview2.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">The Mousetrap</h2>   
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: blueviolet;
}
</style>
</head>
<body>

<h2>Star Rating</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

</body>
</html>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
          ut labore et dolore magna aliqua. Pharetra sit amet aliquam id diam maecenas ultricies mi. 
          Adipiscing diam donec adipiscing tristique. Adipiscing bibendum est ultricies integer quis auctor. 
          Consequat interdum varius sit amet. Tempor commodo ullamcorper a lacus vestibulum sed. 
          Purus semper eget duis at tellus at urna condimentum mattis. </p>
 

             

<h3>Comments thread</h3> <?php
$stmt = $conn->prepare("INSERT INTO moustrapcomments(username, comment)VALUES(?,?)");
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
$mysqli_query="Select * from moustrapcomments ";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { ?>

 <?php    $row["id"];?><br>
   <?php echo $row["username"]; ?><br>
        <?php echo $row["comment"]; ?><br>
        <?php echo $row["datetime"]; ?> <br> 
       
        
<a href="editMousetrap.php?id=<?php echo $row["id"]; ?>">Edit</a>
<a href="deleteMousetrapComments.php?id=<?php echo $row["id"]; ?>">Delete</a>

    <?php 
    $count++;  
} ?>

      

 
  
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
 </div>
    
 </div>
     
      
    </div>

      
      


  </html> 








<?php // including the css for the footer
include 'footerCSS.php'; 
?>
