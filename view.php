<?php

require'headerCSS_1.php';
include_once 'connection.php';

if(!isset($_SESSION['username'])){
    header("Location:login.php");
}?>

<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8"> 
    </head> 
    <body>
  <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">View profile</h2>   
    
    <style>      
    table { 
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    
    td, th {
    border: 2px solid #A31414;
    text-align: left;
    padding: 8px;
    }

    
    </style>
      <table>

<?php
    
echo "<table style='border: solid 2px black;'>"; // this brings the table to screen
    
echo "<tr><th>User Id</th> <th>Username</th> <th>Edit</th> <th>Delete</th></tr>"; // this brings the headings to screen

$count=1;
$mysqli_query="Select * from userreg ";
$result = mysqli_query($conn,$mysqli_query);
while($row = mysqli_fetch_assoc($result)) { ?>
    <tr><td><?php echo $row["id"]; ?></td><td><?php echo $row["username"]; ?></td><td ><a href="update_1.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php  $count++; 
} ?>
      </table>
  </div>
  </div>
 </div> 
        
        <script>  
//gets all the elements with the class name confirmDelete
        var elements = document.getElementsByClassName("confirmDelete");
        
        for(var i = 0; i < elements.length; i++){
//        for each instance, add an event listener
//        listen for click, activate confirmDelete function,
elements[i].addEventListener("click", confirmDelete);
}

function confirmDelete(e){
// prompt the user if they want to cancel, stop the navigation
if(!confirm("Do you want to delete this user?")){
    e.preventDefault();
}
}
</script>
    </body>
</html>

<?php // including the css for the footer
include 'footerCSS.php'; 
?>