<?php 
	require_once("koneksi_sekolah.php");
	$error = 0;
	
	if(isset($_POST['nis']))
		$nis=$_POST['nis'];
	else $error=1;
	if(isset($_POST['name']))
		$name=$_POST['name'];
	else $error=1;
	if(isset($_POST['gender']))
		$gender=$_POST['gender'];
	else $error=1;
	if(isset($_POST['address']))
		$address=$_POST['address'];
	else $error=1;
	if(isset($_POST['placeOfBirth']))
		$placeOfBirth=$_POST['placeOfBirth'];
	else $error=1;
	if(isset($_POST['dateOfBirth']))
		$dateOfBirth=$_POST['dateOfBirth'];
	else $error=1;
	if(isset($_POST['phone']))
		$phone=$_POST['phone'];
	else $error=1;
	
	if($error==1){
		echo "Terjadi kesalahan pada proses input data";
		exit();
	}
	
	$query = "INSERT INTO siswa (nis, nama, jk, alamat, tmp_lahir, tgl_lahir, telepon)
	values('{$nis}', '{$name}', '{$gender}', '{$address}', '{$placeOfBirth}', '{$dateOfBirth}', '{$phone}');";
	
	$insert = mysqli_query($mysqli, $query);
	if($insert == false) {
		echo "error dalam menambahkan data";
	} else {
		header("Location:index_sekolah.php");
	}

?>