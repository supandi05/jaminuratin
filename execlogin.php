<?php 

session_start();
include 'koneksi.php';
 
$email = $_POST['email'];
$password = md5($_POST['password']);

$login = mysqli_query($con, "select * from user where email = '$email' and password = '$password'");


$cek = mysqli_num_rows($login);

if($cek > 0){

$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="Administrator"){
 
		// buat session login dan username
		$_SESSION['nama'] = $nama;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Administrator";
		

		// alihkan ke halaman dashboard admin
		header("location:admin/administrator.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="Keuangan"){
		// buat session login dan username
		$_SESSION['nama'] = $nama;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "Keuangan";
		// alihkan ke halaman dashboard pegawai
		header("location:admin/keuangan.php");
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}



?>