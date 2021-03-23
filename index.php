<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<title>Al Ikhlas Nunukan</title>
</head>
<body>
	<div class="container">
		<h2 style="text-align: center;">Alat Genarate Token Ujian Al Ikhlas Nunukan</h2>
		<form method="POST" action="index.php">
			<div class="mb-3">
				<input class="form-control form-control-lg"  name="name" type="text" placeholder="Masukan Nama Siswa" aria-label="">
			</div>

			<input type="submit" name="submit" class="btn btn-success">
		</form>
	</div>

	<?php
	error_reporting(0);
	$characters = $_POST['name'];

	function generateRandomString($length = 4) {
		$characters = $_POST['name'];
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	?>
	<div class="container" style="text-align: center; margin-top: 50px;">
		<?php
		echo "Nama : "; echo "<b>$characters</b>"; 
		?>
	</div>
	<div class="container" style="text-align: center;">
		<?php
		echo "Kode Akses/Token : "; echo "<b>".generateRandomString()."</b>"; 
		?>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>