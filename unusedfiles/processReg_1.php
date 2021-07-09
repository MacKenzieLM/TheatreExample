 <!-- including PHP in a file -->
<?php
session_start();
require 'headerCSS_1.php';    // this brings the header css into script 
include_once 'connection.php';   // this connects to database

$stmt = $conn->prepare("INSERT INTO userreg(username,password)VALUES(?,?)");
$stmt->bind_param("ss", $username, $hash);
?>
 <!--styling the page title-->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Confirmation of Registration</h2>   

  
  <?php  
if(isset($_POST['register'])){
  


  // inserts data into the database
if($_SERVER["REQUEST_METHOD"]==="POST"){

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password_1']);
    $password_2 = test_input($_POST['password_2']);
    
//     // checks if username already exists
    $sql = "SELECT * FROM userreg WHERE username='$username'";
    $results = mysqli_query($conn,$sql);
    
    // checks if user exists in database
    $stmt = $conn->prepare("SELECT * FROM userreg WHERE username = '$username', password='$hash'"); //prepared statement here
    $stmt->bind_param('ss',$username,$hash);
    $stmt->execute();
   
    // if row returns with a match, username exists
    if($rows==1){
        $_SESSION['username']='admin';
        header("Location: adminViewUsers.php");
   if(mysqli_num_rows($results)>0){
        echo "Sorry, username already taken, try again.";
       } 
            else{
    
      // sanitise information-->
  if($password == $password_2)  
  {
     $hash = password_hash($password, PASSWORD_DEFAULT);  
     echo "Congratulations  $username, you have signed up!";
        
    //Insert to Mysqli Query 
    //use the sanitised inputs 
    $sql = "INSERT INTO userreg (username,password) VALUES ('$username','$hash')";
    $result = mysqli_query($conn, $sql); // check
        
      }
        else{
               echo "Sorry, check your details and try again.";
               } 
       
   }   

    }
}

}
// security measures to test the user's input
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// close database connection
 $conn->close();       
 ?>
      <br><br>
    <a href="login.php" class="button-primary">Here to login</a>
         <br>
         <br>
         <a href="register.php" class="button-primary">Back to register</a>
         <br> 
         <br>
</div>
  </div>
 </div> 
 </html>
<!-- including footer PHP in a file -->
<?php
include 'footerCSS.php';
?>
