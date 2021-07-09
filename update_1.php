<?php

require 'headerCSS_1.php';   // this brings the header css into script 
include_once 'connection.php';  // this connects to database
$stmt=$conn->prepare("UPDATE userreg SET username=?,password=? WHERE id=?");
$stmt->bind_param("ssi", $username, $hash, $id);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST["id"];
    $username=test_input($_POST["username"]);
    $password=test_input($_POST["password"]);
    $stmt->execute();
    
    if($stmt->affected_rows>0){
        header("Location:view.php");
    }else{
        echo "something went wrong";
       }
}else{
    $id = $_GET["id"];
    $sql="SELECT * FROM userreg WHERE id=$id";
    $result=$conn->query($sql);
    
$row = $result->fetch_assoc();
}




function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$stmt->close();
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
      <h2 class="h2">Update User Details</h2>   
      <p> Please update your details in the boxes below and press update.</p>
  </div>
  </div>
 </div>  
<div class="container">
<div class="card">
<div class="row">
     
    <!-- form element which allows user to input data -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
   
 <input type="hidden" name="id" value="<?php echo $id;?>">


    
        <table><tr>
                <td>Username:</td>
                <td><input type="text" name="username" value="<?php echo $row["username"];?>" required></td>
            </tr>
            <tr>
            
                <td>Password:</td>
<!--                <td><input type="password" name="password" value="<?php echo $row["password_1"];?>" required></td>-->
             <td><input type="password" name="password"  required></td>
            </tr>
             
          </table>
    <input type="submit" name="submit" value="edit">
<!--   <a href="view.php" name="update"type="submit"input class="button-primary">update</a>
    <input class="button-primary" name="submit" type="submit" value="Edit"> -->
</form>
     
 </div>
</div>
</div>
</html>

<!-- including footer PHP in a file -->
<?php

require 'footerCSS.php';
?>







 