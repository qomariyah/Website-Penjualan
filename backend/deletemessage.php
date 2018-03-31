<?php
	
	include ("../conn/connection.php");

	$id = $_GET['id'];
	if(isset($id)){
		$query = mysqli_query($koneksi, "DELETE FROM tb_inbox WHERE id_inbox='$id'");

		if($query){
			header("location:message.php");
		}
	}

?>