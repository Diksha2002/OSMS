<!DOCTYPE html>
<html>
<head>
<style>
<center>
.dropbtn {
    background-color: BLACk;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 10px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: red;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: green;
}
</style>
</head>
<body bgcolor="pink">
<h2> ADMIN HOME</h2> 

<div class="dropdown">
   <button class="dropbtn">TEACHER</button>
	<div class="dropdown-content">
	<a  href="tdis.php">VIEW</a>
	<a  href="tdelete.php">DELETE</a>
	</div>
</div>
<div class="dropdown">
<a  href="http://localhost/sdis.php">
   <button class="dropbtn">STUDENT</button></a>
<div class="dropdown-content">
	<a  href="sdis.php">VIEW</a>
	<a  href="sdelete.php">DELETE</a>
	</div>
</div>
<div class="dropdown">
<a  href="http://localhost/cmnt.php">
   <button class="dropbtn">COMMENTS</button></a>
</div>
<div class="dropdown">
<a  href="http://localhost/first.php">
   <button class="dropbtn">BACK</button></a>
</div>

</center> 
   </body>
</html>
