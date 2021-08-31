<?php include 'filesLogic1.php';?>
<!DOCTYPE html> 
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body BGCOLOR="PINK">
  <div class="container">
      <div class="row">
        <form action="uploadpdf.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
	<p>Subject Name:<input type='text' name='sname'  placeholder='Enter your subject name' size=30></p>
	 <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>

 
