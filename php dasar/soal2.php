<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal2</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16*16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307059">
    <meta name="author" content="Wisnu A. Pradana">
</head>
<body>
    <body>
        <h1>soal 2</h1>
</body>
</html>
<?php
// Jumlah uang yang diambil oleh Ani
$jumlah_uang = 1387500;

// Array untuk menyimpan nilai uang pecahan
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

// Array untuk menyimpan banyaknya masing-masing uang pecahan
$banyak_pecahan = array();

// Menghitung banyaknya masing-masing uang pecahan
foreach ($pecahan as $nilai) {
    // Menghitung jumlah uang pecahan yang diperoleh
    $jumlah_pecahan = floor($jumlah_uang / $nilai);
    
    // Menyimpan jumlah uang pecahan ke dalam array
    $banyak_pecahan[$nilai] = $jumlah_pecahan;
    
    // Mengurangi jumlah uang dengan nilai pecahan yang telah dihitung
    $jumlah_uang %= $nilai;
}

// Menampilkan hasil
foreach ($banyak_pecahan as $nilai => $jumlah) {
    echo "Uang pecahan Rp. " . number_format($nilai, 0, ',', '.') . " sebanyak " . $jumlah . " lembar<br>";
}
?>
