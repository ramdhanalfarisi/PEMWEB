<?php

include_once 'koneksi.php';
include_once 'models/Studies.php';

$obj = new Studies();

$proses = $_POST['proses'];

// Upload file
$nama_file = '';

if (!empty($_FILES['foto_sekolah']['name'])) {

    $nama_file = $_FILES['foto_sekolah']['name'];
    $tmp = $_FILES['foto_sekolah']['tmp_name'];

    move_uploaded_file($tmp, 'uploads/' . $nama_file);
}

switch ($proses) {

    case 'simpan':

        $data = [

            $_POST['nama'],
            $_POST['idlevel'],
            $_POST['keterangan'],
            $_POST['tahun_lulus'],
            $nama_file

        ];

        $obj->simpan($data);

        break;

    case 'ubah':

        $data = [

            $_POST['nama'],
            $_POST['idlevel'],
            $_POST['keterangan'],
            $_POST['tahun_lulus'],
            $nama_file,
            $_POST['id']

        ];

        $obj->ubah($data);

        break;
}

// Hapus data
if (isset($_GET['proses']) && $_GET['proses'] == 'hapus') {

    $obj->hapus($_GET['id']);
}

header('location:index.php?hal=studies_list');
exit;
?>