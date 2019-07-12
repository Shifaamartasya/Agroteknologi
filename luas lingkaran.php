<?php
function luaslingkaran($phi, $diameter){
	$jari_jari=$diameter/2;
	$hasil = $phi * $jari_jari* $jari_jari/2;
	return $hasil;
}
	echo "jadi dari hasil penghitungan dengan phi 3.14 dan jari jari 10 adalah "
	. luaslingkaran(3.14, 10);
?>