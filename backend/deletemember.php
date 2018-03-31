<?php
	
	include ("../conn/connection.php");

	$id = $_GET['id'];
	if(isset($id)){
		$query = mysqli_query($koneksi, "DELETE FROM tb_member WHERE id_member='$id'");

		if($query){
			header("location:member.php");
		}
	}

?>