<?php
 //session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <link type="text/css" rel="stylesheet" href="StyleSheet1.css" />
</head>
<body>
<div id="top">
           <hr/>
    <h1 class="style2">
             <strong>ABOUT US</strong><br />
		
    </h1>
 </div>

<div id="conetnt" >   
    <div id = "menu">
    <hr />
   <?php
	 
  echo "<ul type='none'>";
  echo "<li> <a href='home.htm'>HOME</a></li>";
     ?>
   <?php
    if(isset($_SESSION['currentuser']))
	{
    if($_SESSION['currentuser']=="admin@exam.com")
	{
    echo "<li> <a href='adminoptions.php'>ADMIN OPTIONS</a></li>";
    echo "<li> <a href='logout.php'>LOGOUT</a></li>";
    echo "<li> <a href='contact.php'>CONTACT</a></li>";
    echo "<li> Welcome ".$_SESSION['currentuser']." </li> ";
	}
	else
	{
	
     echo "<li> <a href='contact.php'>CONTACT</a></li>";
     echo "<li> Welcome ".$_SESSION['currentuser']."  </li> ";
	}
	}
	else 
	{
	echo "<li> <a href='studelogin.php'>STUDENT LOGIN</a></li>";
	echo "<li> <a href='facultylogin.php'>TEACHER LOGIN</a></li>";
	  echo "<li> <a href='contact.php'>CONTACT</a></li>";
	}
	?>
     </ul><hr />
	 <center><font color="green"><h2>Learn about us and what we do best</h2></font><br />
</div></div>  
   <br/>
</body>
</html>