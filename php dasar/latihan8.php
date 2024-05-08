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
$array = array(
    "1c"=>array("udin", "ismail", "adi"),
    "1d"=>array("lukman", "fajri", "mahmud")
);
print_r($array);
print_r($array['1d']); 
echo "<br>"; 
echo $array['1d'] [0];
echo "<br>"; 
// tampilkan "fajri"
echo $array['1d'][1];
echo "<br>"; 

// tampilkan "adi"
echo $array['1c'][2]; 
echo "<br>"; 

echo "<em>atau data kelas bisa ditulis juga dengan</em>"; 

echo "<br>"; 
$array_simple = array(
    "1c" => ["udin", "ismail", "adi"],
    "1d" => ["lukman", "fajri", "mahmud"]
);

print_r($array_simple);
?>
