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
	#form .col{
		min-height:400px;
	}
</style>
</head>
<body>

	<div id="form" class="pt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8 p-4 bg-light">
					
					<form action="actiom.php" method="POST">
					<!--<input type="text" name="name" id="name"/>
					</form>-->
					
					<div class="form-group mb-2">
						<label for="name">Nama Lengkap</label>
						<input name="name" id="name" class="form-control" type="text" placeholder="Nama Lengkap" required>
					</div>
					
					<div class="form-group mb-2">
						<label for="email">Surel</label>
						<input id="email" class="form-control" type="email" placeholder="Surel Anda">
					</div>
					
					<div class="form-group mb-2">
						<label for="age">Usia</label>
						<input id="age" class="form-control" type="number" placeholder="Usia Anda">
					</div>
					
					<div class="form-group mb-2">
						<label for="password">Password</label>
						<input id="password" class="form-control" type="password" placeholder="Password">
					</div>
					
					<div class="form-group mb-2">
						<label for="re-password">Ulangi Password</label>
						<input id="re-password" class="form-control" type="password" placeholder="Ulangi Password">
					</div>
					
					<!--<textarea name="paragrafName">
						Isi paragraf akan dituliskan di sini
					</textarea>-->
					
					<div class="form-group mb-2">
						<label for="address">Tulis Alamat Anda</label>
						<textarea id="address" class="form-control" rows="3">
						</textarea>
					</div>
					
					<!--<select name="selectInput">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
					</select>-->
					
					<div class="form-group mb-2">
						<label for="pilihKota">Pilih Kota Anda</label>
						<select id="cities" class="form-control">
							<option value="">- Pilih Kota Anda -</option>
							<option value="Batam">Batam</option>
							<option value="Solok">Solok</option>
							<option value="Pandeglang">Pandeglang</option>
							<option value="Kutai">Kutai</option>
							<option value="Manggarai">Manggarai</option>
						</select>						
					</div>
					
					<!--<input type="checkbox" id="check1" value="sambal">
					<label for="check1">Saos Sambal</label><br>
					<input type="checkbox" id="check2" value="tomat">
					<label for="check2">Saos Tomat</label><br>
					<input type="checkbox" id="check3" value="kecap">
					<label for="check3">Saos Kecap</label><br>-->
						
					<div class="form-group mb-2">
						<label>Data Pendukung COVID-19</label>
						<div class="form-check">
							<input id="check1" class="form-check-input" type="checkbox" value="swabStatus">
							<label for="check1" class="form-check-label">Hasil Swab Negatif</label>
						</div>
						<div class="form-check">
							<input id="check2" class="form-check-input" type="checkbox" value="vaccineStatus">
							<label for="check2" class="form-check-label">Sudah Vaksinasi</label>
						</div>
					</div>
					
					<!--<input type="radio" id="male" name="gender" value="male">
					<label for="male">Laki-laki</label><br>
					<input type="radio" id="female"  name="female" value="female">
					<label for="check2">Perempuan</label><br>-->
					
					<div class="form-group mb-2">
						<label>Jenis Kelamin</label>
						<div class="form-check">
							<input id="male" name="gender" class="form-check-input" type="radio" value="male">
							<label for="check1" class="form-check-label">Laki-laki</label>
						</div>
						<div class="form-check">
							<input id="female" name="gender" class="form-check-input" type="radio" value="female">
							<label for="check2" class="form-check-label">Perempuan</label>
						</div>
					</div>
					
					<!--<input type="submit" value="Kirim">-->
					
					<input class="btn btn-primary" type="submit" name="submit" value="Kirim">
					
					<!--<p><br>
					<input type="text" id="username" name="username" required>-->
					
					</form>
					
				</div>
			</div>
		</div>
	</div>

</body>
</html>
