<html>
<head>
</head>
<body>
<form action="dashboard.php" method="post">
<h1>Login</h1>
<?php
if( isset($_GET['error']) ){
	echo '<p style="color: red;">Please enter your username and password to continue!</p>';
}
?>
<p>Username:
<br /><input type="text" name="username" /></p>
<p>Password:
<br /><input type="password" name="password" /></p>
<p>
	<input type="submit" value="Login" />
	<input type="reset" value="Clear" />
</p>
</form>

<?php
// require "db.php";
?>

<p>Password: 12345</p>
<?php echo "<p>Encrypted sha1: ".sha1('12345')."</p>"; ?>
<?php echo "<p>Encrypted md5: ".md5('12345')."</p>"; ?>
</body>
</html>