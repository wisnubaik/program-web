<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>
    <h2>Konversi Nilai Angka ke Huruf</h2>
    <form method="post" action="">
        Masukkan nilai angka: <input type="number" name="nilai" required><br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $nilai = $_POST['nilai'];

        // fungsi untuk mengkonversi nilai angka ke huruf
        function konversiNilai($nilai) {
            if ($nilai >= 90 && $nilai <= 100) {
                return 'A';
            } elseif ($nilai >= 80 && $nilai <= 89) {
                return 'AB';
            } elseif ($nilai >= 70 && $nilai <= 79) {
                return 'B';
            } elseif ($nilai >= 60 && $nilai <= 69) {
                return 'BC';
            } elseif ($nilai >= 0 && $nilai <= 59) {
                return 'C';
            } else {
                return 'Nilai tidak valid';
            }
        }

        // konversi nilai dan tampilkan hasil
        $hasilKonversi = konversiNilai($nilai);
        echo "Nilai angka $nilai setara dengan nilai huruf $hasilKonversi";
    }
    ?>
</body>
</html>
