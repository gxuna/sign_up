<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>account</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
</html>
<form action="connect.php" method="post">
</form>

<h1><?php
 echo  $_REQUEST['uname'];?><br>
 <?php echo  $_REQUEST["lname"];?> <br>
 <?php echo  $_REQUEST["age"]; echo"years old";
?> </h1>
<body>
</body>