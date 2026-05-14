<?php
// data awal
$nama = "Budi";
$totalBelanja = 15000;
$nilai = 89;

//code if else - total belanja
if($totalBelanja > 10000){
    $keterangan = "Selamat $nama, Anda mendapat hadiah";
}else{
    $keterangan = "Terima Kasih $nama, sudah berbelanja";
}

// ternary - kelulusan
$ketLulus = ($nilai >= 60) ? "Lulus" : "Gagal";

// if multi kondisi - grade
if($nilai >= 85 && $nilai <= 100){
    $grade = "A";
}else if($nilai >= 75 && $nilai <= 85){
    $grade = "B";
}else if($nilai >= 60 && $nilai <= 75){
    $grade = "C";
}else if($nilai >= 30 && $nilai <= 60){
    $grade = "D";
}else if($nilai >= 0 && $nilai <= 30){
    $grade = "E";
}else{
    $grade = "-";
}

// switch case - predikat
switch ($grade) {
    case 'A':
        $predikat = "Memuaskan";
        break;
    case 'B':
        $predikat = "Bagus";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Buruk";
        break;
    default:
        $predikat = "-";
}
?>


<h3>Data Belanja</h3>
Nama Pelanggan: <?= $nama ?><br>
Total Belanja: <?= number_format($totalBelanja) ?><br>
Keterangan: <?= $keterangan ?>
<hr>

<h3>Data Nilai</h3>
Nama Siswa: <?= $nama ?><br>
Nilai: <?= $nilai ?><br>
Status: <?= $ketLulus ?><br>
Grade: <?= $grade ?><br>
Predikat: <?= $predikat ?><br>