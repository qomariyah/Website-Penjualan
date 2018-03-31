<?php
	include("conn/connection.php");
	session_start();

	if (isset($_POST)) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = mysqli_query($koneksi, "SELECT * FROM tb_member where email_member='$email' and password_member='$password' ");
		$data = mysqli_fetch_array($query);
		$result = mysqli_num_rows($query);
		if ($result == 1) {
			$_SESSION['member'] = $data['nama_member'];
			$_SESSION['id_member'] = $data['id_member'];
			$_SESSION['email'] = $data['email_member'];
			header('location:index.php');
		} else {
			header('location:page-login.php');
		}
		
	}
?>