<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ujian Nasional</h1>
    <form action="" method="post">
        <label>Masukkan Nilai Ujian Nasional:</label>
        <input type="text" id="" name="nilai" required><br><br>

        <label>Nilai Matematika :</label>
        <input type="number" id="" name="nilai_matematika" required><br><br>
        <label>Nilai Bahasa Indonesia :</label>
        <input type="number" id="" name="nilai_bahasa_indonesia" required><br><br>
        <label>Nilai IPA :</label>
        <input type="number" id="" name="nilai_ipa" required><br><br>

        <button type="submit" name="hasil">Hasil Nilai</button>
    </form>

    <?php
        if (isset($_POST['hasil'])) {
            echo "<h2>Hasil Ujian Nasional:</h2>";
            $nama = $_POST['nilai'];
            $nilai_matematika = $_POST['nilai_matematika'];
            $nilai_bahasa_indonesia = $_POST['nilai_bahasa_indonesia'];
            $nilai_ipa = $_POST['nilai_ipa'];

            $rata_rata = ($nilai_matematika + $nilai_bahasa_indonesia + $nilai_ipa) / 3;
            echo "Nama: " . $nama . "<br>";
            echo "Nilai Rata-rata:   $rata_rata <br><br>";

            $grade = '';
            if ($rata_rata >= 90) {
                $grade = 'A';
            } elseif ($rata_rata >= 80) {
                $grade = 'B';
            } elseif ($rata_rata >= 70) {
                $grade = 'C';
            } elseif ($rata_rata >= 60) {
                $grade = 'D';
            } else {
                $grade = 'E';
            }
            echo "Grade Anda: <strong>$grade</strong><br><br>";
            // Menentukan Kelulusan
            $status = ($rata_rata >= 75) ? 'Lulus' : 'Tidak Lulus';
            $warna = ($status =='LULUS') ? 'green' : 'red';
            echo "Status Kelulusan: <strong style='color: $warna;'>$status</strong><br>";

            // Pesan untuk siswa
            echo "<strong>Surat Cinta<strong>";
            switch ($grade) {
                case 'A':
                    echo "<p>Selamat! Anda mendapatkan nilai A. Terus pertahankan prestasi Anda!</p>";
                    break;
                case 'B':
                    echo "<p>Bagus! Anda mendapatkan nilai B. Terus tingkatkan usaha Anda untuk meraih nilai A!</p>";
                    break;
                case 'C':
                    echo "<p>Cukup baik! Anda mendapatkan nilai C. Jangan berkecil hati, terus belajar dan berusaha untuk meningkatkan nilai Anda!</p>";
                    break;
                case 'D':
                    echo "<p>Perlu perbaikan! Anda mendapatkan nilai D. Jangan menyerah, terus belajar dan berusaha untuk meningkatkan nilai Anda!</p>";
                    break;
                case 'E':
                    echo "<p>Perlu perhatian serius! Anda mendapatkan nilai E. Jangan putus asa, terus belajar dan berusaha untuk meningkatkan nilai Anda!</p>";
                    break;
            }
        }

    ?>
</body> 
</html>