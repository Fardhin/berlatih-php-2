<?php
function pasangan_terbesar($angka){
// kode di sini
	$string_angka = "$angka";
	$terbesar = substr($string_angka, 0, 2);
	for ($i=0; $i <= strlen($string_angka) - 2; $i++){
		$cek = substr($string_angka, $i, 2) . "<br>";
		if($cek > $terbesar){
			$terbesar = $cek;
		}
	}
	return $terbesar;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>