<!-- including PHP in a file -->
<?php 
   session_start(); 
   require 'headerCSS_1.php';
    require 'connection.php';

if(isset($_SESSION['username'])){
  echo "Welcome " . $_SESSION['username'];

  
}
    ?>

<!--styling the page title -->
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Login</h2>   

    </div>
  </div>
</div>  

<div class="container">
<div class="card"> 

    <form action="processLogin2.php" method="post">
          
<label>Username</label>
<input class="u-full-width" type="text" name="username" minlength="6" required>
            <p></p>
    
    <label>Password</label>
    <input class="u-full-width" type="password" name="password_1" minlength="8" required>
            <p></p>
    
    <input class="button-primary" type="submit" value="Submit">
        <p></p>
    
    <label>or register here:</label>
                   
    <a href="register.php" class="button-primary">Register</a>
                 
    </form>                         
    </div>
</div>
     
<?php // including the css for the footer
include 'footerCSS.php'; 
?>  