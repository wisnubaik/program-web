<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>colors</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16*16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307059">
    <meta name="author" content="Wisnu A. Pradana">
</head>
<body>
    <body>
        <h1>Halaman PHP saya</h1>
</body>
</html>
<?php
function writeMsg($nama) {
    echo "selamat datang, ".$nama."<br>";
}
writeMsg("wisnu baik");

function tambah(int $angka1, int $angka2) {
    $a= $angka1+$angka2;
    return $a;
}
$hasil=tambah(5,5);
    echo ($hasil);