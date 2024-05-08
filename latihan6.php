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
// while loop
$x = 10;
while ($x >= 5) {
    echo "nomor : $x <br>";
    $x--;
}

// do while
$x = 1;
do {
    echo "nomor : $x <br>";
    $x++;
} while ($x <= 5);

// foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}

// for
for ($x = 0; $x <= 10; $x++) {
    echo "$x <br>";
}

// for dengan break
for ($x = 0; $x <= 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "nomor : $x <br>";
}
?>