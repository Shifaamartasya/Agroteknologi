<?php
function faktorial($angka){
	if ($angka <2) {
	 return 1;
	 }else {
	 //memanggil ditinya sendiri
	 return ($angka * faktorial($angka-1));
	 }
}

//memanggil fungsi
echo "faktorial 5 adalah". faktorial (5);
?>