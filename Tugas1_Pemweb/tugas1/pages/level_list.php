<?php

if (!isset($_SESSION['MEMBER'])) {
    header('location:index.php?hal=login');
}

$obj = new Level();

$rs = $obj->index();

?>

<h2>Data Level</h2>

<a href="index.php?hal=level_form" class="btn btn-primary mb-3">

    Tambah Level

</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;

    foreach ($rs as $row) {
    ?>

        <tr>

            <td><?= $no ?></td>

            <td><?= $row['nama'] ?></td>

            <td>

                <a href="index.php?hal=level_form&id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">

                    Edit

                </a>

                <a href="level_controller.php?id=<?= $row['id'] ?>&proses=hapus" class="btn btn-danger btn-sm"
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