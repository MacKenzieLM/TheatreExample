<?php
session_start();
require'headerCSS_1.php';
include_once 'connection.php';

if(isset($_SESSION['password'])){
    echo "Welcome " . $_SESSION['username'];
}
// if user has logged in then they get a welcome message// to start the user working with a session to prevent access to sertain pages

?>
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2 class="h2">Hello there!</h2>   
     
        
        <?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = test_input($_POST['username']);
    $hash= test_input($_POST['password_1']);
    
    $query = mysqli_query($conn, "SELECT * FROM userreg WHERE username = '$username'");
    $rows = mysqli_fetch_assoc($query);//returns data from the database
    $row = mysqli_num_rows($query);
    
    if(password_verify($hash,$rows['password'])&& $row==1){
        $_SESSION['username'] = $rows['username']; //this sets the variable in the database
    }else{
        echo "Invalid password. Try again.";
    }
}    
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
      <br> <br>    
      <a href='register.php'>Register</a><br>
    <br><a href='login.php'>Login</a>
    <br>
    <br>
    

 

</div>
  </div>
 </div> 
<?php // including the css for the footer
include 'footerCSS.php'; 
?>
