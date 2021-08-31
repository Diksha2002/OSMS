<?php
echo "<form method='POST'>";
echo "<center>";
echo "<font size=15  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<br>";
echo "Answer the hint question";
echo "<br>";
echo "<br>";
echo "<p>Hint question 1 :What is your PET name?";
echo "<input type='text' name='pet'>";
echo "</p>";
echo "<p>Hint question 2 :What was your First School name?";
echo "<input type='text' name='school'>";
echo "</p>";
echo "<br>";
echo "<br>";
echo "<input type='submit' name='next' value='next'>";
echo "</form>";
if(isset($_POST['next']))
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
				$uname=$_POST['pet'];
				$password=$_POST['school'];
				$sql="select h1,h2 from teacher where h1 = '".$uname."' AND h2='".$password."' ";
				$result=mysql_query($sql);
				
	if(mysql_num_rows($result)!=0)
	{
		  
		echo "YOU HAVE SUCCESSFULLY LOGGED IN";
		 /* Redirect browser */  
  			  header("Location: facultychange.php");  
  	  }  
     else {  
   		 echo "Wrong Answer please! Retry";  
   	 }  
  	
				}
			}
		}
	
?>