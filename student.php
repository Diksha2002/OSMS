<?php
echo "<body bgcolor='pink'>";
echo "<form method='POST' >";
echo "<font size=5  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<center>";

echo "<h3>Student Registration Form</h3>";
echo "</font>";

echo "<div align='center'>";
echo "<br>";
echo "<br>";
echo "<p>";
echo "Enrollment no. :<input type='text' name='snum' placeholder='Enter your EnRoll No.' >";
echo "<br>";
echo "<br>";

echo "Enter name     :<input type='text' name='sname' placeholder='Enter your Name.'>";
echo "<br>";
echo "<br>";

echo "Enter e-mail :<input type='email' name='semail' placeholder='Enter your Email.'>";
echo "<br>";
echo "<br>";

echo "Enter mobile no. :<input type='number' name='num' placeholder='Enter your Moblie No.'>";
echo "<br>";
echo "<br>";
echo "Choose Password :<input type='password' name='pass' placeholder='Enter secure Password.'>";
echo "<br>";
echo "<br>";
echo "Confirm Password :<input type='password' name='pass1'placeholder='Re-Enter Password.'>";
echo "<br>";
echo "<br>";
echo "Hint question 1 :What is your NICK name?";
echo "<input type='text' name='pet' placeholder='Enter your nick name.'>";
echo "<br>";
echo "<br>";
echo "Hint question 2 :What was your First School name?";
echo "<input type='text' name='school'placeholder='Enter your First School Name.'>";
echo "</p>";
echo "<br>";
echo "<br>";
echo "<input type='submit'  name='complete' value='submit' style='height:50px;width:100px'>";
echo "</fieldset>";
echo "</div>";
echo "</form>";
echo "</body>";	

	if(isset($_POST['complete']))
	{
		$con=@mysql_connect("localhost","root","");

		if($con)
		{
			echo 'mysql connection ok<br/>';
			mysql_select_db('project',$con);
			$table='create table student(rollno decimal(25),name varchar(25),email varchar(30),mobno decimal(10),password varchar(10),h1 varchar(10),h2 varchar(10))';
			if(mysql_query($table,$con))
			{
				echo 'table created successfully';
			}
	
			$insert="INSERT INTO student(rollno,name,email,mobno,password,h1,h2) 
			VALUES('".$_POST["snum"]."','".$_POST["sname"]."','".$_POST["semail"]."','".$_POST["num"]."','".$_POST["pass"]."','".$_POST["pet"]."','".$_POST["school"]."')";
	
 header("Location: studelogin.php"); 

		if(!mysql_query($insert,$con));
			{
		 		die(mysql_error());
			}
	mysql_close($con);
	}
}
?>