<?php
$con=@mysql_connect("localhost","root","");
if(!$con)
{
die(mysql_error());
}
else
{
mysql_select_db("project",$con);
$result=mysql_query('select * from add_subject group by semester');

echo "<table border=2>
<tr>
<th>Semester</th>
<th>Subject code</th>
<th>Subject name</th>
</tr>
";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>".$row['semester']."</td>";
echo "<td>".$row['s_code']."</td>";
echo "<td>".$row['s_name']."<a href='downloads.php'>-DOWNLOADS</td></a>";
echo "</tr>";
}
echo "</table>";
mysql_close($con);
}

?>