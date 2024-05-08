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
$txt = "Selamat Datang!";
$txt2 = "Politeknik Negeri Madiun";
$x = 5;
$y = 10.5;

echo "<p>isi variabel txt adalah: $txt</p" ;
echo "<p>isi variabel x adalah: $x</p" ;
echo "<p>isi variabel y adalah: $y</p" ;
echo "Belajar PHP di" . $txt2 . "<br>" ;
echo $x + $y ;

define("nama_konstanta", "wisnu baik") ;
echo "<br>".nama_konstanta ;

?>