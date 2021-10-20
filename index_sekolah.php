<?php
	require_once("koneksi_sekolah.php");
	$query="Select * from siswa";
	$result=mysqli_query($mysqli, $query);
?>
<html>
<head>
	<title>PHP dan MySQL</title>
	
	
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	<link href="styles.css" rel="stylesheet">
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
						<a class="nav-link" aria-current="page" href="http://localhost/webcanggih2/index_sekolah.php">Daftar Siswa</a>
					</li>
				</ul>
			
		</div>
	</nav>
	
	<div id="student-list">
		<div class="container">
			<div class="row mb-4">
				<div class="col">
					<h2>Daftar Siswa</h2>
				</div>
				<div class="col text-end">
					<a class="btn btn-primary" href="http://localhost/webcanggih2/formsiswa.php" role="button">Tambah Siswa</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<table class="table">
						<thead>
							<tr>
							<th scope="col">#</th>
							<th scope="col">Nama</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">Alamat</th>
							<th scope="col">Usia</th>
							<th scope="col">Telepon</th>
							</tr>
						</thead>
						<tbody>
						<?php
						$i=1;
						foreach($result as $siswa){
							$tglLahir = explode("-", $siswa["tgl_lahir"]);
							$tahunSekarang = date("Y");
							$selisihTahun = $tahunSekarang - $tglLahir[0];
							
							echo '<tr>
							<th scope="row">' . $i++ . '</th>
							<td>' . $siswa["nama"] . '</td>
							<td>' . $siswa["jk"] . '</td>
							<td>' . $siswa["alamat"] . '</td>
							<td>' . $selisihTahun . '</td>
							<td>' . $siswa["telepon"] . '</td>
							</tr>';
						}
						?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	
	
	
</body>
</html>