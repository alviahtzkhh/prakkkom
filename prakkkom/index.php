<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Email dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="wrapper">
		<h2>FORM LOGIN</h2>
 
		<form action="cek_login.php" method="post">
			<div class="box-login">
			    <input type="text" name="email" class="box-login" placeholder="E-mail" required="required">
            </div>
            <div class="box-login">
			    <input type="password" name="password" class="box-login" placeholder="Password" required="required">
            </div>
			<input type="submit" class="btn-primary" value="LOGIN">
		</form>
	</div>
</body>
</html>