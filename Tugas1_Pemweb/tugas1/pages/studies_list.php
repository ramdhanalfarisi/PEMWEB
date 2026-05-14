<?php

if (!isset($_SESSION['MEMBER'])) {
    header('location:index.php?hal=login');
}

$obj = new Studies();

$rs = $obj->index();
?>

<h2>Data Studies</h2>

<a href="index.php?hal=studies_form" class="btn btn-primary mb-3">

    Tambah Studies

</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Level</th>
        <th>Keterangan</th>
        <th>Tahun</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;

    foreach ($rs as $row) {
    ?>

        <tr>

            <td><?= $no ?></td>

            <td><?= $row['nama'] ?></td>

            <td><?= $row['nama_level'] ?></td>

            <td><?= $row['keterangan'] ?></td>

            <td><?= $row['tahun_lulus'] ?></td>

            <td>

                <img src="uploads/<?= $row['foto_sekolah'] ?>" width="100">

            </td>

            <td>

                <a href="index.php?hal=studies_form&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a href="studies_controller.php?id=<?= $row['id'] ?>&proses=hapus" class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin?')">

                    Hapus

                </a>

            </td>

        </tr>

    <?php
        $no++;
    }
    ?>

</table>