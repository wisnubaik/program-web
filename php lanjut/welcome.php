<?php
session_start();

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION["username"])) {
    // Jika belum, redirect ke halaman login
    header("Location: login.html");
    exit();
}

// Mengambil username dari session
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Welcome, <?php echo $username; ?></h2>
    <a href="session.html">Logout</a>
</body>

</html>