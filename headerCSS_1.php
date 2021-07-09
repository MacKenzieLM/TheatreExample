
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href='https://fonts.googleapis.com/css?family=Charmonman' rel='stylesheet'> 
<style>

/* Style the body */    
body {
margin:0;
font-family:Arial;
background-color: #daceb7;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #daceb7;
  padding-left: 20px;
}

/* input config */
input[type=submit] {
  background-color: #a31414;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* submit hover */
input[type=submit]:hover {
  background-color: #000;
}

/* Add a card effect for articles */
.card {
  background-color: #daceb7;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Header/Logo Title */
.header {
  padding: 15px;
 height: 150px;
  text-align: left;
  font-family: 'Charmonman';
  background: #A31414;
  color: black;
  font-size: 10rem; 
    }

/* header 1 size */
.header h1 {
  font-size: 1.5rem;
 
}

/* header 2 font */
.h2 {
font-family: 'Charmonman';
}

/* header 3 font */
.h3 {
font-family: 'Charmonman';
}
/* Create two unequal columns that floats next to each other 
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
} 

/*topnav colour*/
.topnav {
  overflow: hidden;
  background-color: #000;
}
/*topnav colour on hover*/
.topnav a {
  float: left;
  display: block;
  color: #daceb7;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
/*the colour of font changing on hover*/
.active {
  background-color: #000;
  color: #daceb7;
}

.topnav .icon {
  display: none;
}


/*Makes the media take up the available page width*/
img, object, embed, video {
      max-width:100%;
}
/*video resize is to ensure Youtube Videos scale correctly to fill the available space */
.videoResize {
    position: relative;
    padding-bottom:56.25%;    /*adds the lower section of the video on 56.25 minimizes black borders*/
    padding-top: 30px;        /*makes it easier to read buttons*/
    height: 0;
    overflow:hidden;
}

.videoResize iframe {
    position:absolute;        /* helps to load lower part of video */
    top:0;                    /*adjusts position of where video should appear*/
    left:0;
    width:100%;               /*scales video correctly*/
    height:100%;
    border: none;
}
/*dropdown menu*/
.dropdown {
   
 float: left;
  overflow: hidden;
}
/*dropdown menu button format*/
.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: #daceb7;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  
}
/* dropdown content colour*/
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #000;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
 
}
/* dropdown button on active*/
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
   color: #daceb7;
}
/*dropbown menu colour active*/
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #daceb7;
  color: #000;
}
/*dropdown content colour on hover*/
.dropdown-content a:hover {
  background-color: #daceb7;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/*responsive format - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}
/*responsive format - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  /*topnav responsive*/
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  /*dropdown responsiveness*/
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
  ul.topnav li.right {float: right;}
}

.topnav-right {
  float: right;
}
</style>
</head>
<body>
 
    <!-- responsive header sizing -->
<div class="header">
     <h1 style="font-size:3vw;">The Theatre Company</h1>
<!--  <h1>The Theatre Company</h1>-->
 
</div>
    
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="performances.php">Performances</a>
  
  <div class="dropdown">
    <button class="dropbtn">Announcements/Blog
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="announcements2.php">Announcements/Blog</a>
     
   
    
    </div>
  </div>
  
  <a href="contact2.php">Contact</a>
  <a href="slideshow.php">Slideshow</a>
  <a href="view.php">View Users</a>
  <div class="dropdown">
    <button class="dropbtn">Account 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="login.php">Login</a>
<!--     <a href="update.php">Update details</a>-->
      <a href="delete.php">Delete account</a>
    </div>
  </div> 
   <div class="topnav-right"> 
       <a href="register.php">Register</a>
       
    <a href="logout.php" onclick="alertFunction()">Logout</a>
   
 </div>
 
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
   
</div>

<div style="padding-left:16px">
  <h2></h2>
 
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// alert pop up event
document ("logout")
function alertFunction(){
    alert("You have now logged out");
}
</script>


</body>
</html>
