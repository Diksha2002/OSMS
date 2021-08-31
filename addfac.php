<?php
echo "<body bgcolor='pink'>";
echo "<form  method='POST'>";
echo "<font size=20  color=blue>";
echo "<header></centre>OSM</header>";
echo "</font>";
echo "<center>";
echo "<legend><b>ADD FACULTY</b></legend>";
echo "Faculty ID:<input type='text' name='fid' >";
echo "<br>";
echo "<br>";
echo "Faculty name :<input type='text' name='fname' >";
echo "<br>";
echo "<br>";
echo "Designation :<input type='text' name='desig' >";
echo "<br>";
echo "<br>";
echo "Highest Qualification :<input type='text' name='qual' >";
echo "<br>";
echo "<br>";
echo "No. of year Experience:<input type='number' name='exp' >";
echo "<br>";
echo "<br>";
echo " Permanent Address:";
echo "<br>";
echo "<textarea name='add' rows='6' column='30' ></textarea>";
echo "<br>";
echo "<br>";
echo "Present Address :";
echo "<br>";
echo "<textarea name='add1' rows='6' column='30' ></textarea>";
echo "<br>";
echo "<br>";
echo "<input type='submit' name='addfac'  value='submit' style='height:50px;width:100px;margin-right:100px'>";
echo "</r>";
echo "<a href='adhome.PHP'>";
echo "<input type='button' name='back' value='back' style='height:50px;width:100px'>";
echo "</a>";
echo "</form>";

if(isset($_POST['addfac']))
	{
		$con=@mysql_connect("localhost","root","");

		if($con)
		{
		echo "<br/>";
			echo 'successefully inserted<br/>';
			mysql_select_db('project',$con);
			$table='create table add_faculty(Faculty_id decimal(10),Faculty_name varchar(30),Designation varchar(20),Qualification varchar(20),Expereince decimal(10),Permanent_Address varchar(101),Present_Address varchar(100))';
			if(mysql_query($table,$con))
			{
	echo "<br/>";
				echo 'table created successfully';
			}
	
			$insert="INSERT INTO add_faculty(Faculty_id,Faculty_name,Designation,Qualification,Expereince,Permanent_Address,Present_Address) 
			VALUES('".$_POST["fid"]."','".$_POST["fname"]."','".$_POST["desig"]."','".$_POST["qual"]."','".$_POST["exp"]."','".$_POST["add"]."','".$_POST["add1"]."')";
	
                         header("Location: displayfaculty.php");
		if(!mysql_query($insert,$con));
			{
		 		die(mysql_error());
			}
	mysql_close($con);
	}
}
?>