<?php
echo "<body bgcolor='pink'>";
echo "<form  method='POST' >";
echo "<center>";
echo "<font size=15  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<center>";
echo "<br>";
echo "Answer the hint question";
echo "<br>";
echo "<br>";
echo "<p>Hint question 1 :What is your NICK name?";
echo "<input type='text' name='pet'>";
echo "</p>";
echo "<p>Hint question 2 :What was your First School name?";
echo "<input type='text' name='school'>";
echo "</p>";
echo "<br>";
echo "<br>";
echo "<input type='submit' name='submit' value='NEXT'>";
echo "<a  href='http://localhost/first.php' style='margin-left:50px'>BACK</a>";
echo "</form>";

if(isset($_POST['submit']))
{
	$conn=@mysql_connect("localhost","root","");
	if($conn)
	{
		echo "<br>";
		echo "<br>";
		echo "CONNECTED SUCCESSFULLY";
	}
	mysql_select_db('project',$conn);
	
{

   	 $h1 = $_POST['pet'];
	$h2=$_POST['school'];
	$sql="select h1,h2 from  teacher where  teacher.h1='".$h1."' AND teacher.h2='".$h2."' ";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)!=0)
	{
		 session_start(); 
		echo "<br>";   
		echo "YOU HAVE SUCCESSFULLY LOGGED IN";
		 /* Redirect browser */  
  		header("Location: forgot.php");	  
  	  }  
     else {  		
		echo "<br>";
		echo "<br>";
   		 echo "Invalid username or password!";  
   	 }  
  	
}

}

?>