<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal1</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16*16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307059">
    <meta name="author" content="Wisnu A. Pradana">
</head>
<body>
    <body>
        <h1>soal 1</h1>
</body>
</html>
<?php
// Gaji pokok Obi
$gaji_pokok = 3250000;

// Tunjangan jabatan Obi
$tunjangan = 1200000;

// Menghitung gaji kotor
$gaji_kotor = $gaji_pokok + $tunjangan;

// Menghitung pajak penghasilan (10% dari gaji kotor)
$pajak = 0.1 * $gaji_kotor;

// Menghitung gaji bersih
$gaji_bersih = $gaji_kotor - $pajak;

// Menampilkan hasil
echo "Gaji bersih yang diterima Obi setiap bulannya adalah Rp. " . number_format($gaji_bersih, 0, ',', '.') . ",-";
?>
