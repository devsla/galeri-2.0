<?php
	session_start();
	include('koneksi.php');
	
	if (isset($_POST['showlike'])){
		$id = $_POST['id'];
		$query2=mysqli_query($koneksi,"select * from `likefoto` where fotoid='$id'");
		echo mysqli_num_rows($query2);	
	}
?>

