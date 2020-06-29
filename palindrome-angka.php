<?php
function isPalindrome($string){
	return strrev($string) == $string;
}
function palindrome_angka($angka) {
  // tulis kode di sini
	if(is_int($angka) == false){
		echo "parameter bukan integer <br>";
		return null;
	}
	$angka++;
	while(isPalindrome("$angka") == false){
		$angka++;
	}
	echo "<br>";
	return $angka;
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>