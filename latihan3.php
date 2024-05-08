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
    <body>
        <h1>Halaman PHP saya</h1>
        
</body>
</html>
<?php
$x = 5;
$y = 10;

echo "penambahan".$x + $y."<br>";
echo "pengurangan".$x - $y."<br>";
echo "perkalian".$x * $y."<br>";
echo "pembagian".$x / $y."<br>";
echo "modulus".$x % $y."<br>";
echo "exponensial".$x ** $y."<br>";
echo("<br>");

$x += 2;
$y *= 2;
echo "penambahan x".$x."<br>";
echo "perkalian y".$y."<br>";
echo("<br>");

echo "isi ++x = ".++$x."<br>";
echo "isi x++ = ".$x++."<br>";
echo "isi x = ".$x."<br>";
echo("<br>");

$user = "Wisnu A. Pradana";
$status = (empty($user)) ? "kosong" : "ada isi";
echo $status."<br>";
echo $color = $color ?? "red";

?>