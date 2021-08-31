<html>
<center>
<body bgcolor="pink">
<font size="7"  face="Courier New">
<h3>TEACHER TABLE</h3>

<?php
$con=@mysql_connect("localhost","root","");
if(!$con)
{
die(mysql_error());
}
else
{
mysql_select_db("project",$con);
$result=mysql_query('select * from teacher');

echo "<table border=2>
<tr>
<th>No</th>
<th>Teacher Id</th>
<th>Name</th>
<th>Email</th>
<th>Mobile No</th>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['s_no']."</td>";
echo "<td>".$row['id']."</td>";
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