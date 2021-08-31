<?php
echo "<font size=15  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<form method='POST'>";
echo "<center>";
echo "<fieldset style='width:30%' align='left'>";

echo "<h3>";
echo "<p>Enter your rollno:<input type='number' name='fname'></p>";
echo "<p>choose new password :<input type='password' name='fpass'></p>";
echo "<p>confirm password:<input type='password' name=''fpass1></p>";
echo "<br>";
echo "<br>";
echo "<input type='submit'  name='change1' value='submit' style='height:50px;width:100px'>";
echo "</h3>";
echo "</fieldset>";


if(isset($_POST['change1']))
	{
		$con=@mysql_connect("localhost","root","");

		if(!$con)
		{
			die(mysql_error());
		}
		else
		{ echo "ok";
			mysql_select_db('project',$con);
			{
				$uname=$_POST['fname'];
				$password=$_POST['fpass'];
				$sql="update student  set  password='".$password."'where rollno= '".$uname."'  ";
				$result=mysql_query($sql);
				
			if($result)
	{
		  
		echo "YOU HAVE SUCCESSFULLY LOGGED IN";
		 /* Redirect browser */  
  			  header("Location: studelogin.php");  
  	  }  
     else {  
   		 echo mysql_error()." please Retry";  
   	 }  
  	
				}
			}
		}
?>