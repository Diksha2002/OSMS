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
   	 $sql="select * from add_subject where  add_subject.id='".$id."' ";
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)!=0)
	{
		 session_start();  
	echo "<br>";

	echo "<center>";	     
		 /* Redirect browser */  
	 $query="select s_name from add_subject where  add_subject.id='".$id."' ";
	$result=mysql_query($query);
	
	if(mysql_num_rows($result)>0)
	{
	echo "<table border='2'><tr><th>SUBJECT NAME</th></tr>";	
	while ($row=mysql_fetch_assoc($result))
	{
	/* display data code */
	echo "<tr><td>".$row["s_name"]."</td></tr>";
	}
	echo "</table>";
	}
	else
	{
	echo "not doe";
	} 
  	
  	  }  
     else {  
   		 echo "Invalid id!";  
   	 }  
  	
}
echo "</center>";
}
?>
