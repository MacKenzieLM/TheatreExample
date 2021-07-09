<?php
session_start();
require 'headerCSS_1.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html>
    <head>
         
    <body>
     
<!--styling the initial wording -->
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
 
    <!-- form element which allows user to input data -->
    <!-- form action sends data to register.php for processing to database -->
    <form action="processReg2.php" method="post" onsubmit="return matchPassword(this)">
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">                 
    <input id="keyEvent" type="text" placeholder="Username" name="username" required> <p></p>
                
    <input type="password" id="password_1" placeholder="Password" name="password_1" minlength="8" required> <p></p>
                
    <input type="password" id="password_2" placeholder="Confirm Password" name="password_2" minlength="8" required> <p></p>
    <br>
    <table>
        <tr>
            <td id="matching"></td>
        <tr>
    </table>
    <button id="register" type="submit">Register</button>
  
    <p>Already a member? <a href="login.php" class="button-primary">Login Here</a></p>
    
 </form>   
     </div>
 </div>
  
    <p></p>

 <script>  
 // user validation - check the passwords match
 function matchPassword(){
    var password_1 = document.getElementById("password_1").value;
    var password_2 = document.getElementById("password_2").value;
    if(password_1!=password_2)
    {
        alert("Passwords do not match");
    }else{
        alert("Passwords match"); // something is back to front
        header("Location: register.php"); // but proper alerts are on pages
    }
    }
     
  // key event to check spaces in username input
  document.getElementById("keyEvent").addEventListener("keydown", keyFunction);
  function keyFunction(ev){
      var x = ev.keyCode;
      if(x===32){
          alert("Username cannot contain a space");
          ev.preventDefault();
      }
  }
  
      
  </script> 
   
  </body> 
  </html>

<?php // including the css for the footer
include 'footerCSS.php'; 
?>
 
