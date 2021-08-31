<?php
$con=@mysql_connect("localhost","root","");
if(!$con)
{
die(mysql_error());
}
else
{
mysql_select_db("project",$con);
$result=mysql_query('select * from add_faculty ');
echo "<body bgcolor='pink'>";
echo "<table border=1>
<tr>
<th>Faculty_id</th>
<th>Favulty_name</th>
<th>Designation</th>
<th>Qualification</th>
<th>Experience</th>
<th>Permanent_address</th>
<th>Present_address</th>
</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['Faculty_id']."</td>";
echo "<td>".$row['Faculty_name']."</td>";
echo "<td>".$row['Designation']."</td>";
echo "<td>".$row['Qualification']."</td>";
echo "<td>".$row['Expereince']."</td>";
echo "<td>".$row['Permanent_Address']."</td>";
echo "<td>".$row['Present_Address']."</td>";
echo "</tr>";
}

echo "</table>";
mysql_close($con);
}

?>