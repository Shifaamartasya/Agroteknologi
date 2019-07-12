<?php
//membuat fungsi
function luaspersegipanjang($panjang, $lebar){
	$hasil = $panjang * $lebar;
	return $hasil;
}
	echo "jadi dari hasil penghitungan dengan panjang 10dan lebar 6.5 adalah "
	. luaspersegipanjang(10, 6.5);
?>