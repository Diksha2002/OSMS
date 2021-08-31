
<?php
echo "<body bgcolor='pink'>";
echo "<form  method='POST'>";
echo "<font size=20  color=blue>";
echo "<header></centre>OSM</header>";
echo "</font>";
echo "<center>";
?>
<?php include 'ex.html'?>
<?php
echo "<br>";
echo "<br>";
echo "<legend><b>ADD SUBJECT</b></legend>";
echo "<br>";
echo "Teacher id. :<input type='text' name='tno' >";
echo "<br>";
echo "<br/>";
echo "Subject code. :<input type='text' name='sco' >";
echo "<br>";
echo "<br>";
echo "Semester :<input type='number' name='semester' >";
echo "<br>";
echo "<br>";
echo "Subject name :<input type='text' name='sname' >";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<input type='submit' name='addsub' value='submit' style='height:50px;width:100px;margin-right:70px'>";
echo "</r>";
echo "</form>";

if(isset($_POST['addsub']))
	{
		$con=@mysql_connect("localhost","root","");

		if($con)
		{
			ECHO '<BR/>';
			echo 'successefully inserted<br/>';
			mysql_select_db('project',$con);
			$table='create table add_subject(id decimal(10),s_code decimal(10),s_name varchar(30),semester decimal(3))';
			if(mysql_query($table,$con))
			{
				ECHO '<BR/>';
				echo 'table created successfully';
			}
			$insert="INSERT INTO add_subject(id,s_code,s_name,semester,branch) 
			VALUES('".$_POST["tno"]."','".$_POST["sco"]."','".$_POST["sname"]."','".$_POST["semester"]."','".$_POST["branch"]."')";
	
		if(!mysql_query($insert,$con));
			{
		 		  die(mysql_error()) or  header("Location: uploadpdf.php");
			}
		}
}
?>