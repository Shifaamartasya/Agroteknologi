<?php
	$nama = $_POST['nama'];
	$alamat =$_POST['alamat'];
	$kota =$_POST['kota'];
	$gender =$_POST['gender'];
	
	if($nama ==""){
		header("location:form2.php");
	}else{
		echo "nama_anda_adalah_".$nama;
		echo"<br>";
		echo "alamat_anda_di_" .$alamat;
		echo"<br>";
		echo "kota_anda_berada_di_". $kota;
		"<br>";
		echo "jenis_kelamin_anda_adalah_". $gender;
	}
?>