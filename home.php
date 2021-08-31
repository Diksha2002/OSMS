<!DOCTYPE html>
<html>
<head>
<style>
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
<h2>HOME</h2> 


<div class="dropdown">
   <button class="dropbtn">BRANCH</button>
        <div class="dropdown-content">
	<a  href="com.php">COMPUTER ENGINEERING</a>
	<a  href="mach.php">MECHENICAL ENGINEERING</a>
	<a  href="cvl.php">CIVIL ENGINEERING</a>
	<a  href="elec.php">ELECTRICAL ENGINEERING</a>
        </div>
</div>
<div class="dropdown">
<a  href = "http://localhost/OSMS/contact.php">
   <button class="dropbtn">CONTACT US</button></a>
</div>
<div class="dropdown">
<a  href="http://localhost/OSMS/about.php">
   <button class="dropbtn">About Us</button></a>
</div>
<div class="dropdown">
<a  href="http://localhost/OSMS/first.php">
   <button class="dropbtn">BACK</button></a>
</div>


<center><img src="C:\Users\jitesh\Downloads\book1.jpg" width=90% height=85% align="center"></img>

</center> 
   </body>
</html>
