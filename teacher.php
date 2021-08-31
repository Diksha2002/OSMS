<?php
echo "<center>";
echo "<body bgcolor='pink'>";
echo "<form method=POST>";
echo "<font size=5  color=blue>";
echo "<header>OSM</header>";
echo "</font>";
echo "<h3>Faculty Registration Form</h3>";
echo "<br>";
echo "<div align='center'>";
echo "<p>Faculty ID :<input type='number' name='tnum' placeholder='Enter your ID' ></p>";
echo "<p>Enter name :<input type='text' name='tname' placeholder='Enter your name' ></p>";
echo "<p>Enter e-mail :<input type='email' name='temail' placeholder='Enter your e-mail' ></p>";
echo "<p>Enter mobile no. :<input type='number' name='num' placeholder='Enter your mobile no'></p>";
echo "<p>Choose Password :<input type='password' name='pass' placeholder='Enter your secure password'></p>";
echo "<p>Confirm Password :<input type='password' name='pass1'placeholder='Re-enter your password'></p>";
echo "<p>Hint question 1 :What is your NICK name?";
echo "<input type='text' name='pet' placeholder='Enter your nick name' ></p>";
echo "<p>Hint question 2 :What was your First School name?";
echo "<input type='text' name='school' placeholder='Enter your school name'></p>";
echo "<br>";
echo "<br>";
echo "<input type='submit' name='save' value='submit' style='height:50px;width:100px'>";
echo "</div>";
echo "</form>";
echo "</body>";
if(isset($_POST['save']))
	{
		$conn=@mysql_connect("localhost","root","");
		$sql="select * from teacher";
		$result = mysql_query($sql);
		if($conn)
		{
			echo 'mysql connection ok<br/>';
			mysql_select_db('project',$conn);
		
			
			$sql="INSERT INTO teacher(id,name,email,mobno,password,h1,h2) 
			VALUES('".$_POST["tnum"]."','".$_POST["tname"]."','".$_POST["temail"]."','".$_POST["num"]."','".$_POST["pass"]."','".$_POST["pet"]."','".$_POST["school"]."')";
		
	if(!mysql_query($sql));
			{
		 		die(mysql_error()) or header("Location: facultylogin.php");
			}
	mysql_close($conn);
}
}
?>