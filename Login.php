<!DOCTYPE html>
<html>
<head>
	<style>
body {
	background-image: url('Srinidhi towers 1.jpg');
}
</style>
	
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-5.0.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-5.0.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-5.0.1/js/bootstrap.min.js"></script>

</head>
<body>

	<center><br>
		<h3>SRINIDHI TOWERS MANAGEMENT SYSTEM</h3><br>
		<form action=""method="post">
			<input type="submit" name="admin_login" value="Admin login">
			<input type="submit" name="owner_login" value="Owner login">
		<form>
		<?php
			if(isset($_POST['admin_login'])){
				header("Location: admin_login.php");
			}
			if(isset($_POST['owner_login'])){
				header("Location: owner_login.php");
			}
		?>
	</center>	
    
</body>
</html>