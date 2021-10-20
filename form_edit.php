<?php
	require_once('connection.php');
	$error=0;
	
	if(isset($_GET["nis"]))
		$nis=$_GET["nis"];
	else
		echo "NIS Tidak Ditemukan! <a href='latihan.php'>Kembali</a>";
	
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
?>

<!DOCTYPE html>
<html>
<head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

<style type="text/css"> 
	.container, .container-fluid {
		width:1200px;
	}
	.navbar-brand img {
		max-height:80px;
	}

</style>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
		
			<a class="navbar-brand" href="#"><img src="media/gambar/logojongkreatif.png"/></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collape navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="#">Daftar Siswa</a>
					</li>
				</ul>
			
		</div>
	</nav>
	
	<div id="form" class="pt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8 p-4 bg-light">
					<form action="action_edit.php" method="POST">
						<div class="form-group mb-2">
							<label for="name">NIS</label>
							<input name="nis" id="nis" class="form-control" type="text" placeholder="Nomor Induk Siswa" value="<?=$nis ?>" required>
						</div>
						<div class="form-group mb-2">
							<label for="name">Nama Lengkap</label>
							<input name="name" id="name" class="form-control" type="text" placeholder="Nomor Induk Siswa" value="<?=$name ?>"required>
						</div>
						<div class="form-group mb-2">
							<label>Jenis Kelamin</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="male" value="L" <?=$maleChecked ?> required>
								<label class="form-check-label" for="male">Laki-laki</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="gender" id="male" value="P" <?=$femaleChecked ?> required>
								<label class="form-check-label" for="male">Perempuan</label>
							</div>
						</div>
						<div class="form-group mb-2">
							<label for="address">Alamat</label>
							<textarea name="address" id="address" class="form-control" rows="3"  required><?=$address ?></textarea>
						</div>
						<div class="form-group mb-2">
							<label for="name">Tempat Lahir</label>
							<input name="placeOfBirth" id="tmp_lahir" class="form-control" type="text" placeholder="Tempat Lahir" value="<?=$placeOfBirth ?>" required>
						</div>
						<div class="form-group mb-2">
							<label for="name">Tanggal Lahir</label>
							<input name="dateOfBirth" id="name" class="form-control" type="date" value="<?=$dateOfBirth ?>"required>
						</div>
						<div class="form-group mb-2">
							<label for="name">Telepon</label>
							<input name="phone" id="phone" class="form-control" type="text" placeholder="Nomor Telepon" value="<?=$phone ?>"required>
						</div>
						<input name="submit" type="submit" value="Kirim" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
