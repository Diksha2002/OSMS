<html>
<center>
<body bgcolor="pink">
<font size="3"  face="Courier New">
<h1>COMPUTER ENGINEERING<font size="3"  face="Courier New">
<a  href="http://localhost/first.php" style="margin-left:50px">BACK</a></font></h1>
<br>
<?php 
$con=@mysql_connect("localhost","root","");
if(!$con)
{
die(mysql_error());
}
else
{
mysql_select_db("project",$con);

$query="select semester,s_code,s_name from add_subject where add_subject.branch='computer'";
$result=mysql_query($query);
	
	if(mysql_num_rows($result)>0)
{
echo "<table border=5 cellspacing=25 width=500 height=50>
<tr>
<th>Semester</th>
<th>Subject code</th>
<th>Subject name</th></tr>";
while($row=mysql_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['semester']."</td>";
echo "<td>".$row['s_code']."</td>";
echo "<td>".$row['s_name']."<a href='typ.html'>-DOWNLOADS</td></a>";
echo "</tr>";
}
echo "</table>";
}
mysql_close($con);
}
?>
</body>
</html>