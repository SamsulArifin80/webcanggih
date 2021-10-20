<?php

$mysqli = new mysqli("localhost", "root", "", "coba_sekolah");

if ($mysqli -> connect_error) {
	echo "Gagal menyambungkan ke MySQL: " . $mysqli -> connect_error;
	exit();
}
//echo "Connected successfully";
?>