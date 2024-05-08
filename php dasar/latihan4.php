<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Div dan Span</title>
    <link rel="icon" type="img/png" href="gambar/icon.png" sizes="16*16" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="233307059">
    <meta name="author" content="Wisnu A. Pradana">
</head>
<body>
    <h1>Halaman PHP saya</h1>
</body>
<?php
$t = date("H");
echo "if";
if ($t < 16) {
    echo "selamat siang!";
}


$t = date("H");
echo "<br> If dan Else <br>";
if ($t < 20) {
    echo "selamat siang!";
} else {
    echo "selamat malam!";
}

echo "<br> Nested If <br>";
if ($t < 10) {
    echo "selamat pagi!";
} elseif ($t < 16) {
    echo "selamat sore!";
} else {
    echo "selamat malam!";
}
?>