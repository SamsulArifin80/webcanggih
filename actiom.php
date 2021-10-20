<?php
if(isset($_POST["name"])){
	$name=$_POST["name"];
} else {
	$name="Nama Tidak Dikenali";
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
	#form .col{
		min-height:400px;
	}
</style>
</head>
<body>

	<div id="profile">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8">
					<h4>Nama = <?=$name?></h4>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
