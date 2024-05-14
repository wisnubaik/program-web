<?php
// Array dengan nama dan umur
$data = array(
    array("nama" => "Ringga", "umur" => 18),
    array("nama" => "Ranggi", "umur" => 22),
    array("nama" => "Ringgo", "umur" => 23),
    array("nama" => "Rangga", "umur" => 17),
    array("nama" => "Ranggi", "umur" => 29),
    array("nama" => "Rengga", "umur" => 32),
    array("nama" => "Ronggo", "umur" => 27),
    array("nama" => "Renggi", "umur" => 21),
    array("nama" => "Rongga", "umur" => 40),
    array("nama" => "Ranggo", "umur" => 26),
    array("nama" => "Ringgu", "umur" => 24),
    array("nama" => "Ringgi", "umur" => 33),
    array("nama" => "Ranggu", "umur" => 14),
    array("nama" => "Ronggi", "umur" => 29),
    array("nama" => "Anisa", "umur" => 32)
);

// Konversi array menjadi JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $json_data;