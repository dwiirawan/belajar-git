<?php
$num_char = 0;
$text = "Belajar dengan dengan PHP";

$char = $text{$num_char - 1};
while ($char != ' ') {
	$char = $text{++$num_char};
}

echo "Cara mengggambil kata pertama dalam suatu kalimat <br />";
echo "<b>".substr($text, 0, $num_char)."</b>";
?>