<?php
echo "<body bgcolor='pink'>";
echo "<form>";
echo "<center>";
echo "<font size=15  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<center>";
echo "<p>Faculty ID :<input type='number' name='num' placeholder='Enter your ID' ></p>";
echo "<p>choose new password :<input type='password' name='fpass'></p>";
echo "<p>confirm password:<input type='password' name=''fpass1></p>";
echo "<br>";
echo "<br>";
echo "<input type='submit' value='submit'>";
echo "</form>";
echo "</body>";

if(isset($_POST['submit']))
{
	$conn=@mysql_connect("localhost","root","");
	if($conn)
	{
		echo "<br>";
		echo "CONNECTED SUCCESSFULLY";
	}
	mysql_select_db('project',$conn);
	{
	echo "<br>";
	$id=$_POST['num'];
	$pass=$_POST['fpass1'];
   	 $sql="update teacher set password='".$pass."' where id='".$id."' ";
	$result=mysql_query($sql);
	if(mysql_num_rows($result)>0)
	{
		 session_start();  
		    $_SESSION['sess_user']=$id;  
		echo "done";
		 /* Redirect browser */  
  			   
  	  }  
     if(!mysql_query($sql,$conn));
	 {  
   	echo "not done";	
	die(mysql_error()) or  header("Location: uploadpdf.php");  
   	 }  
  	
}
mysql_close($conn);
}
?>