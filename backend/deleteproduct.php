<?php
	
	include ("../conn/connection.php");

	$id = $_GET['id'];
	if(isset($id)){
		$query = mysqli_query($koneksi, "DELETE FROM tb_produk WHERE id_produk='$id'");

		if($query){
			header("location:product.php");
		}
	}

?>