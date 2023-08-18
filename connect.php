<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<?php 
$user = "root";
$pass = "";
$db = "testdb";

$db = new mysqli("localhost", $user, $pass, $db) or die("unable to connect u monkey");
?>
<form  action="login.php" method="post">
	<h2>SIGN UP</h2>
		<label>name</label>
		<input type="text" name="uname" placeholder="name"><br>

		<label> last name</label>
		<input type="text" name="lname" placeholder="lastname"><br>

		<label>password</label>
		<input type="password" name="password" placeholder="password"><br>

		<label>age</label>
		<input type="number" name="age" placeholder="age"><br>


		<button type="submit">Login</button>
</form>
<?php 
 




 ?></h1>
</body>
</html>