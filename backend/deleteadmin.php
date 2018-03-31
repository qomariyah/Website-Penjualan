<?php
	
	include ("../conn/connection.php");

	$id = $_GET['id'];
	if(isset($id)){
		$query = mysqli_query($koneksi, "DELETE FROM tb_admin WHERE id_admin='$id'");

		if($query){
			header("location:admin.php");
		}
	}

?>