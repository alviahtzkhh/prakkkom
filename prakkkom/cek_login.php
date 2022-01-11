<?php 
session_start();
include 'koneksi.php';
 
$email = $_POST['email'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"select * from users where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="operator"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "operator";
		header("location:halaman_operator.php");
	}else if($data['level']=="pengguna"){
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "pengguna";
		header("location:halaman_pengguna.php");
	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
?>