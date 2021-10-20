<?php
	require_once("connection.php");
	
	$error = 0;
	
	if(isset($_POST['nis']))
		$nis=$_POST['nis'];
	else
		$error=1;
	if(isset($_POST['name']))
		$name=$_POST['name'];
	else
		$error=1;
	if(isset($_POST['gender']))
		$gender=$_POST['gender'];
	else
		$error=1;
	if(isset($_POST['address']))
		$address=$_POST['address'];
	else
		$error=1;
	if(isset($_POST['placeOfBirth']))
		$placeOfBirth=$_POST['placeOfBirth'];
	else
		$error=1;
	if(isset($_POST['dateOfBirth']))
		$dateOfBirth=$_POST['dateOfBirth'];
	else
		$error=1;
	if(isset($_POST['phone']))
		$phone=$_POST['phone'];
	else
		$error=1;
	if($error==1){
		echo "terjadi kesalahan pada proses input data";
		exit();
	}
	
	$query = "insert into siswa (nis, nama, jk, alamat, tmp_lahir, tgl_lahir, telepon) values ('{$nis}', '{$name}', '{$gender}', '{$address}', '{$placeOfBirth}', '{$dateOfBirth}', '{$phone}');";
	$insert = mysqli_query($mysqli, $query);
	
	if($insert==false){
		echo "error dalam menambahkan data . <a href='latihan.php'>Kembali</a>";
	} else {
		header("Location: latihan.php");
	}
?>