<?php 
echo "<body bgcolor='pink'>";
echo "<form  method='POST' >";
echo "<font size=5  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<br>";
echo "<center>";
echo "<p>Faculty ID :<input type='number' name='tnum' placeholder='Enter your ID' ></p>";
echo "<input type='submit' name='submit' value='login'>";
echo "<br>"; 
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

	$id=$_POST['tnum'];
   	 $sql="delete from teacher where  teacher.id='".$id."' ";
	$result=mysql_query($sql);
	
	  
	echo "<br>";

	echo "<center>";	     
		 /* Redirect browser */  
	 $query="select id,name from teacher";
	$result=mysql_query($query);
	
	if(mysql_num_rows($result)>0)
	{
	echo "<table border='2'><tr><th>Id</th><th>Name</th></tr>";	
	while ($row=mysql_fetch_assoc($result))
	{
	/* display data code */
	echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td></tr>";
	}
	echo "</table>";
	}
	
  	}  
  
echo "</center>";
}
?>
