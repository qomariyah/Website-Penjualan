<?php
	session_start();

	unset ($_SESSION['member']);

	header('location:page-login.php');
?>