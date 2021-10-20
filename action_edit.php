<?php
	require_once("connection.php");
	
	if(isset($_POST['nis']))
		$nis=$_POST['nis'];
	else {
		echo "NIS tidak ditemukan! <a href='latihan.php'>Kembali</a>";
	}
	
	$query="select * from siswa where nis='{$nis}'";
	$result=mysqli_query($mysqli, $query);
	
	foreach($result as $siswa){
		$nis = $siswa["nis"];
		$name = $siswa["nama"];
		$address = $siswa["alamat"];
		$placeOfBirth = $siswa["tmp_lahir"];
		$dateOfBirth = $siswa["tgl_lahir"];
		$phone = $siswa["telepon"];
		
		$maleChecked = "";
		$femaleChecked = "";
		
		if($siswa["jk"]=="L"){
			$maleChecked="checked";
		}
		else if($siswa["jk"]=="P"){
			$femaleChecked="checked";
		}
	}
		
	if(isset($_POST['name']))
		$name=$_POST['name'];
	if(isset($_POST['gender']))
		$gender=$_POST['gender'];
	if(isset($_POST['address']))
		$address=$_POST['address'];
	if(isset($_POST['placeOfBirth']))
		$placeOfBirth=$_POST['placeOfBirth'];
	if(isset($_POST['dateOfBirth']))
		$dateOfBirth=$_POST['dateOfBirth'];
	if(isset($_POST['phone']))
		$phone=$_POST['phone'];
	
	$query = "update siswa set 
		nama = '{$name}',
		jk = '{$gender}',
		alamat = '{$address}',
		tmp_lahir = '{$placeOfBirth}',
		tgl_lahir = '{$dateOfBirth}',
		telepon = '{$phone}'
		where nis = '{$nis}'";
	$update = mysqli_query($mysqli, $query);
	
	if($update==false){
		echo "error dalam mengubah data . <a href='latihan.php'>Kembali</a>";
	} else {
		header("Location: latihan.php");
	}
?>