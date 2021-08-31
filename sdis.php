<html>
<center>
<body bgcolor="pink">
<font size="7"  face="Courier New">
<h3>STUDENT TABLE</h3>

<?php
$con=@mysql_connect("localhost","root","");
if(!$con)
{
die(mysql_error());
}
else
{
mysql_select_db("project",$con);
$result=mysql_query('select * from student');

echo "<table border=2>
<tr>
<th>Enrollment No</th>
<th>Name</th>
<th>Email</th>
<th>Mobile No</th>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['rollno']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobno']."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
}
?>
</body>
</html>