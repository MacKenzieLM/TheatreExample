<?php

require 'headerCSS_1.php';   // this brings the header css into script 
include_once 'connection.php';  // this connects to database
$stmt = $conn->prepare("UPDATE moustrapcomments SET username=?, comment=? WHERE id=?");
$stmt->bind_param("ssi", $username,$comment,$id);


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['id'];
    $username=test_input($_POST['username']);
    $comment=test_input($_POST['comment']);
    $stmt->execute();
 
 if($stmt->affected_rows>0){
        header("Location:mousetrapReview.php");
    }else{
        echo "something went wrong";
       
    }
}else{
   $id=$_GET['id'];
    $sql="SELECT * FROM moustrapcomments";
    $result=$conn->query($sql);
    
$row = $result->fetch_assoc();
}




function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
                        $conn->close();       
 ?>





<!-- starting the html -->
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
 <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Edit thread</h2>   
      <p> Please update the comment in the boxes below and press edit.</p>
  </div>
  </div>
 </div>  
<div class="container">
<div class="card">
<div class="row">
     
    <!-- form element which allows user to input data -->
    <form action="editMousetrap.php" method="post"> 
 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
        
    <label>Username of comment poster:</label>
               <input type="text" id="username" name="username" value="<?php echo $row["username"];?>">
               <br><br>
                       
         <br><br>
            
            <label>Comment message:</label><br><br>
           
              <input type="text" id="comment" name="comment" value="<?php echo $row["comment"];?>">
         
             
    
   
   
    <input class="button-primary" type="submit" value="Edit"> 
    
        </form>
 </div>
</div>
</div>
</html>

<!-- including footer PHP in a file -->
<?php

require 'footerCSS.php';
?>



