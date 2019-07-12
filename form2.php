<html>
	<head>
		<title> Membuat Form Agroteknologi</title>
		<meta name="viewport" content="width=device-width, intial-scale=1">
	</head>
	<body>
	<form method="POST" action="cek.php">
		<input type="text" class="nama anda" name="nama" id="nama" placeholder="isikan nama anda"><br>
		<input type="text" class="alamat" name="alamat" id="alamat" placeholder="Alamat"><br>
        <input type="text" class="kota" name="kota" id="kota" placeholder="Yogyakarta"><br>
		<input type="text" class="gender" name="gender"id="gender" placeholder="Jenis Kelamin"><br>
		<input type="submit" value="kirim">
	</form>
	<?php
		echo @$_POST['nama'];
		echo @$_POST['alamat'];
		echo @$_POST['kota'];
		echo @$_POST['gender'];
		echo @$_POST['kirim'];
	?>
	</body>
	</html>