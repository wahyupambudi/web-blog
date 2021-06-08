<?php 
	$con = mysqli_connect("localhost", "root", "", "db_artikel");

	if(!$con) {
		die("Koneksi Gagal : ". mysqli_connect_error());
	};
?>