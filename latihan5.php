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
        
        $warna = "merah";
        switch ($warna) {
            case "merah":
                echo "warna merah";
                break;
            case "kuning":
                echo "warna kuning";
                break;
            case "hijau":
                echo "warna hijau";
                break;
            default:
            echo "warna tidak dikenal.";
            }
        echo "<br>";
        ?>