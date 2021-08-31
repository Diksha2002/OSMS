


<?php
echo "<body bgcolor='pink'>";
echo "<form  method='POST' >";
echo "<font size=5  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<br>";
echo "<center>";
echo "<font size=10 color='blue'> TEACHER LOGIN</font>";
echo "<font size=5>";
echo "\r"; 
echo "<p>User name:<input type='text' name='uname' size=30 ></p>";
echo "<p>Password:<input type='password' name='pass' size=30></p>";

echo "<input type='submit' name='fsubmit' value='login' style='margin-left:90px'>";
echo "</font>";
echo "<br>";
echo "<br>"; 
echo "<font size=4><a href='facultyforgot.php' style='margin-right:100px'>Forgot password?</a></font>";
echo "<a href='first.php' style='margin-left:50px'>back</a>";
echo "</a>";
echo "<br>";
echo "<br>"; 
echo "<font size=5><a href='teacher.php' style='margin-left:75px'>New user</a></font>";
echo "<br>"; 
echo "</form>";

if(isset($_POST['fsubmit']))
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
	$sql="select* from teacher where  teacher.id='".$uname."' AND teacher.password='".$password."' ";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)!=0)
	{
		 session_start();  
		    $_SESSION['sess_user']=$uname;  
		echo "YOU HAVE SUCCESSFULLY LOGGED IN";
		 /* Redirect browser */  
  		header("Location: tehom.php");	  
  	  }  
     else {  
   		 echo "Invalid username or password!";  
   	 }  
  	
}

}
?>
