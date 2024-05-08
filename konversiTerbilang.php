<!DOCTYPE html>
<html>
<head>
    <title>Konversi Terbilang</title>
</head>
<body>
    <h2>Konversi Angka ke Terbilang</h2>
    <form method="post" action="">
        Masukkan angka (1-9): <input type="number" name="angka" min="1" max="9" required><br><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil angka dari form
        $angka = $_POST['angka'];

        // fungsi untuk mengkonversi angka menjadi terbilang
        function konversiTerbilang($angka) {
            switch ($angka) {
                case 1:
                    return "satu";
                    break;
                case 2:
                    return "dua";
                    break;
                case 3:
                    return "tiga";
                    break;
                case 4:
                    return "empat";
                    break;
                case 5:
                    return "lima";
                    break;
                case 6:
                    return "enam";
                    break;
                case 7:
                    return "tujuh";
                    break;
                case 8:
                    return "delapan";
                    break;
                case 9:
                    return "sembilan";
                    break;
                default:
                    return "Angka tidak valid";
            }
        }

        // konversi angka dan tampilkan hasil
        $hasilKonversi = konversiTerbilang($angka);
        echo "Angka $angka dikonversi menjadi \"$hasilKonversi\"";
    }
    ?>