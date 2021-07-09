<?php
require'headerCSS_1.php';
include_once 'connection.php';

$stmt = $conn->prepare("INSERT INTO userreg(username,password)VALUES(?,?)");
$stmt->bind_param("ss", $username, $password);    

// inserts data into the database
if($_SERVER["REQUEST_METHOD"]==="POST"){

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password_1']);
    $password_2 = test_input($_POST['password_2']);

    $stmt->execute();
    
      // sanitise information-->
  if($password == $password_2)  
  {
     $hash = password_hash($password, PASSWORD_DEFAULT);  
    echo "Welcome $username.  Thank you for signing up!";
  }
}
// security measures to test the user's input
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
      
    <div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Register</h2>   
      <p> Please fill in the boxes below and press Register.</p>
  </div>
  </div>
 </div>  
    
    <div class="container">
     <div class="card">
   <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        
               
       <input class="u-full-width" type="text" placeholder="Username" name="username" minlength="6" required> <p></p>
                
       <input class="u-full-width" type="password" placeholder="Password" name="password_1" minlength="8" required> <p></p>
                
       <input class="u-full-width" type="password" placeholder="Confirm Password" name="password_2" minlength="8" required> <p></p>
    <br>
    <table>
        
            <td id="matching"></td>
   
    </table>
    <input class="button-primary" type="submit" name="submit" value="Submit"> 
    <p>Already a member? <a href="login.php" class="button-primary">Login Here</a></p>
    
 </form> 
     </div>
 </div>
</body>      
 <script>  
 console.log("JS from Page");
 
    // check the passwords match<script> 
/ document.getElementById("password_2").addEventListener("keyup", checkpass);
  
  function matchPassword(){
      var password_1 = document.getElementById("password_1");
      var password_2 = document.getElementById("password_2");
      if(password_1 !=password_2)
      {
          alert("Passwords do not match");
      }else{
          alert("Passwords match");
      }
      }
              
  
  </script>           
 </html>   

<?php
require 'footerCSS.php';
?>