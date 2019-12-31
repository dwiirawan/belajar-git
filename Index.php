<?php
$num_char = 0;
$text = "Belajar dengan PHP 12345";

$JumlahChar = strlen($text);
$AmbilDepan = substr($text, 0, 7);
$AmbilTengah = substr($text, 8, 6);
$AmbilTengahAkhir = substr($text, 8, $JumlahChar);
$AmbilBelakang = substr($text, -3);

echo "Text: $text <br />";
echo "Jumlah Karakter: $JumlahChar <br />";
echo "Ambil Kata depan: $AmbilDepan <br />";
echo "Ambil Kata depan: $AmbilTengah <br />";
echo "Ambil Kata tengah sampai akhir: $AmbilTengahAkhir <br />";
echo "Ambil Kata akhir: $AmbilBelakang <br />";

echo strpos("I love php, php","php");
?>