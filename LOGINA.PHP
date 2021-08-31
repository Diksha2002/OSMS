<html>
<head>
<style>
body { 
	
	background-image:url("im.jpg");
	background-color:pink;
	background-position:center;
	background-repeat:no-repeat;
	background-size:cover;
}
</style>
</head>
</body>
</html>



<?php
echo "<form  method='POST' >";
echo "<font size=5  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<br>";
echo "<center>";
echo "<font size=10 color='blue'>LOGIN</font>";
echo "<font size=5>";
echo "\r"; 
echo "<p>User name:<input type='text' name='uname' size=30 ></p>";
echo "<p>Password:<input type='password' name='pass' size=30></p>";

echo "<input type='submit' name='submit' value='login'>";
echo "</font>";
echo "<a href='first.php' style='margin-left:50px'>back</a>";
echo "</a>";
echo "</form>";

if(isset($_POST['submit']))
{
	$conn=@mysql_connect("localhost","root","");
	if($conn)
	{
		echo "CONNECTED SUCCESSFULLY";
	}
	mysql_select_db('project',$conn);
	
{

   	 $uname = $_POST['uname'];
	$password=$_POST['pass'];
	$sql="SELECT * FROM login_admin WHERE user_name='$uname' and user_pass=SHA('$password')";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)!=0)
	{
		 session_start();  
		    $_SESSION['sess_user']=$uname;  
		echo "YOU HAVE SUCCESSFULLY LOGGED IN";
		 /* Redirect browser */  
  			  header("Location: adhome.php");  
  	  }  
     else {  
   		 echo "Invalid username or password!";  
   	 }  
  	
}

}
?>
