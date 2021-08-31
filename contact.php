<html>
<head>
<style>
img{
	opacity:0.4;
	filter:alpha(opacity=40);
}
img:hover{
	opacity:1.0;
	filter:alpha(opacity=100);
}
</style>
</head>
<body bgcolor="pink">
<center>
<h1>CONTACT US</h1>
<form action="<?php $_PHP_SELF ?>" method="POST">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <br>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<br>
<tr>
 <td valign="top"">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="email" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number *</label>
 </td>
 <td valign="top">
  <input  type="Number" name="telephone" maxlength="12" size="12">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="100" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit"  name= "submit" value="Submit">
 </td>
</tr>
</table>
</form>
</center>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$conn=@mysql_connect("localhost","root","");
	if($conn)
	{
		echo "MYSQL CONNECTION OK<br>";
	}
		
		mysql_select_db('project',$conn);
		
		$insert="INSERT INTO contact1(first_name,last_name,email,telephone,comments)
		values('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."','".$_POST["telephone"]."','".$_POST["comments"]."')";
		
		if(!mysql_query($insert,$conn));
		{
			die(mysql_error());
		}
		mysql_close($conn);
	}
?>
