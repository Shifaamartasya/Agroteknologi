<?php
// membuat fungsi
function perkenalkan($nama, $salam){
	echo $salam.", ";
	echo "perkenalkan, nama saya ".$nama."</br>";
	echo "senang berkenalan dengan anda</br>";
}
//memanggil fungsi yang suduah dibuat
perkenalkan("shifa", "hi");
echo "<hr>"

	$saya= "Shifa";
	$ucapansalam = "selamat pagi";
	//memanggilnya lagi
	perkenalkan($saya, $ucapansalam);
?>