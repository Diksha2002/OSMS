<html>
<center>
<body bgcolor="pink">
<font size="7"  face="Courier New">
<h3>Comments</h3>

<?php
$con=@mysql_connect("localhost","root","");
if(!$con)
{
die(mysql_error());
}
else
{
mysql_select_db("project",$con);
$result=mysql_query('select * from contact1');

echo "<table border=2>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Email</th>
<th>Telephone</th>
<th>Comments</th>
</tr>
";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['first_name']."</td>";
echo "<td>".$row['last_name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['telephone']."</td>";
echo "<td>".$row['comments']."</td>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
}
?>
</body>
</html>