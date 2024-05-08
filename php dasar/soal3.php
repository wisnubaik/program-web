<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal3</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16*16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307059">
    <meta name="author" content="Wisnu A. Pradana">
</head>
<body>
    <body>
        <h1>soal 3</h1>
</body>
</html>
<?php
$scores = array(
    array('No Urut' => 1, 'Poin' => 75, 'Siswa' => 'Adi'),
    array('No Urut' => 2, 'Poin' => 80, 'Siswa' => 'Joni'),
    array('No Urut' => 3, 'Poin' => 65, 'Siswa' => 'Jihan'),
    array('No Urut' => 4, 'Poin' => 70, 'Siswa' => 'Aya'),
    array('No Urut' => 5, 'Poin' => 85, 'Siswa' => 'Ita'),
    array('No Urut' => 6, 'Poin' => 90, 'Siswa' => 'Budi'),
    array('No Urut' => 7, 'Poin' => 95, 'Siswa' => 'Tini'),
    array('No Urut' => 8, 'Poin' => 65, 'Siswa' => 'Sari')
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "Poin siswa dengan nomor urut 5: ";
foreach ($scores as $score) {
    if ($score['No Urut'] == 5) {
        echo $score['Poin'];
        break;
    }
}
echo "<br>";

// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "Nama siswa yang memiliki poin 90: ";
foreach ($scores as $score) {
    if ($score['Poin'] == 90) {
        echo $score['Siswa']. " ";
    }
}
echo "<br>";

// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "Nama siswa yang memiliki poin 100: ";
$found = false;
foreach ($scores as $score) {
    if ($score['Poin'] == 100) {
        echo $score['Siswa']. " ";
        $found = true;
    }
}
if (!$found) {
    echo "Tidak ada";
}
echo "<br>";
?>