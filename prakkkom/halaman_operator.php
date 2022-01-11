<?php 
session_start();
if($_SESSION['level']==""){
	header("location:index.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Operator</title>
	<link rel="stylesheet" href="style.css">
</head>
<body><center>
	<h1>Halaman Operator</h1>
	<p>Halo <b><?php echo $_SESSION['email']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<br>
	<a href="logout.php" class="btn-primary">LOGOUT</a>
</body>
</html>