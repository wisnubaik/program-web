<!DOCTYPE html>
<html>
<head>
	<title>Multiplication Table</title>
</head>
<body>
	<h1>Multiplication Table</h1>

	<?php
$angka = array(12, 13, 15, 161, 67, 189, 346, 876, 54232, 3256);

echo "<h2>Menampilkan Nilai Ganjil atau Genap</h2>";
echo "<p><strong>Angka dalam array:</strong> " . implode(", ", $angka) . "</p>";
echo "<ul>";

foreach ($angka as $nilai) {
    if ($nilai % 2 == 0) {
        echo "<ul>nomor : $nilai genap.</ul>";
    } else {
        echo "<ul>nomor : $nilai ganjil.</ul>";
    }
}

echo "</ul>";
?>

</body>
</html>