<?php session_start();
	include 'conn.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
</head>
<body>

	<h1 style="text-align: center;">ავტორიზებული ადმინისტრატორის გვერდი</h1>


<form method="post">
	<input type="submit" name="logout" value="log out">
</form>

<?php 
	if (isset($_POST['logout'])) {
		session_unset();
		session_destroy();
		header("Location: ../login.php");
	}

 ?>
</body>
</html>