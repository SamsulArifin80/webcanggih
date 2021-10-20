<?php
	require_once("connection.php");
	
	if(isset($_GET['nis']))
		$nis=$_GET['nis'];
	else {
		echo "NIS tidak ditemukan! <a href='latihan.php'>Kembali</a>";
	}
	echo $nis;
	$query="delete from siswa where nis='{$nis}'";
	$result=mysqli_query($mysqli, $query);
	
	if($result==false){
		echo "gagal Menghapus Data";
	} else {
		header("Location: latihan.php");
	}
?>