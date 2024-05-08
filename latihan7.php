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
$namaBuah = array("nanas", "mangga", "jeruk", "apel", "melon", "manggis");
echo "saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";
echo "saya suka " . $namaBuah[1] . "<br>";
echo "saya suka " . $namaBuah[2] . "<br>";
echo "saya suka " . $namaBuah[3] . "<br>";
echo "saya suka " . $namaBuah[4] . "<br>";

$umur = array("andi" => "35 tahun", "ben" => "37 tahun", "joe" => "rahasia tahun");
$umur['ahmad'] = "50 tahun";
echo "umur andi adalah " . $umur['andi'] . "<br>";

// semua umur
echo "Umur semua orang:<br>";
foreach ($umur as $nama => $usia) {
    echo "Umur " . $nama . " adalah " . $usia . "<br>";
}
?>
