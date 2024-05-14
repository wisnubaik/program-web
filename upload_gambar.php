<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" PHP lanjutan ">
    <meta name="keywords" content="233307059">
    <meta name="author" content="wisnubaik">
    <title>Unggah Gambar</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <p><label for="">Pilih gambar yang akan diunggah</label><br><br>
            <input type="file" name="gambar" value="Pilih Gambar" id="gambar1">
        </p>
        <input type="submit" value="Unggah Gambar" name="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $target_dir = "img/";
        $uploadOk = 1;
        
        // Periksa apakah file telah diunggah
        if (!empty($_FILES["gambar"]["tmp_name"])) {
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
            // Periksa apakah file gambar atau bukan
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if ($check !== false) {
                echo "File adalah gambar - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File bukan gambar.";
                $uploadOk = 0;
            }
    
            // Periksa ukuran file
            if ($_FILES["gambar"]["size"] > 5000000) {
                echo "Maaf, file Anda terlalu besar.";
                $uploadOk = 0;
            }
    
            // Hanya izinkan format file tertentu
            if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg"
                && $tipeGambar != "gif") {
                echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
                $uploadOk = 0;
            }
    
            // Periksa apakah file sudah ada
            if (file_exists($target_file)) {
                echo "Maaf, file sudah ada.";
                $uploadOk = 0;
            }
    
            // Periksa apakah $uploadOk disetel ke 0 karena error
            if ($uploadOk == 0) {
                echo "Maaf, file Anda tidak berhasil diunggah.";
            // Jika semuanya baik-baik saja, coba untuk mengunggah file
            } 
        } else {
            echo "Tidak ada file yang diunggah.";
        }
    }
    ?>
</body>

</html>
