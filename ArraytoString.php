<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "tutorial";

	$conn = mysqli_connect($server,$username,$password,$db_name);
	$sql = mysqli_query($conn, "SELECT * FROM bot_member");

	echo "<b>Fetch di bot Telegram</b><br />";
	$response = array();
	while ($row=mysqli_fetch_row($sql))
	{
	   	// Menggabungkan array untuk dijadikan json
	   	array_push($response, $row);
	}
	echo json_encode($response);
	echo "<br />";
	echo "<br />";

	// Mengumbah menjadi text
	$json = json_encode($response);

	// Menghitung jumlah karakter
	$jumlah_char = strlen($json);
	// Mengambil karakter mulai dari karakter ke-4 sampai karakter terakhir dikurangi 3 dari $json
	// Menghilangkan karakter depan => [["
	// Menghilangkan karakter belakang => "]]
	$ambil1 = substr($json, 3, $jumlah_char-6);

	// Replace "," menjadi spasi
	$ambil2 = str_replace('","', ' ', $ambil1);

	// Replace "],[" menjadi 0A
	$ambil3 = str_replace('"],[" ', '%0A', $ambil2);
	echo $ambil3;
?>