<?php

if (!isset($_SESSION['MEMBER'])) {
    header('location:index.php?hal=login');
}

$obj_level = new Level();

$levels = $obj_level->index();

$obj = new Studies();

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id != '') {
    $row = $obj->getStudies($id);
} else {
    $row = [];
}
?>

<h2>Form Studies</h2>

<form method="POST" action="studies_controller.php" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?= isset($row['id']) ? $row['id'] : '' ?>">

    <div class="mb-3">

        <label>Nama Sekolah</label>

        <input type="text" name="nama" class="form-control" value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">

    </div>

    <div class="mb-3">

        <label>Level</label>

        <select name="idlevel" class="form-control">

            <?php
            foreach ($levels as $lvl) {
            ?>

                <option value="<?= $lvl['id'] ?>">

                    <?= $lvl['nama'] ?>

                </option>

            <?php } ?>

        </select>

    </div>

    <div class="mb-3">

        <label>Keterangan</label>

        <textarea name="keterangan"
            class="form-control"><?= isset($row['keterangan']) ? $row['keterangan'] : '' ?></textarea>

    </div>

    <div class="mb-3">

        <label>Tahun Lulus</label>

        <input type="year" name="tahun_lulus" class="form-control"
            value="<?= isset($row['tahun_lulus']) ? $row['tahun_lulus'] : '' ?>">

    </div>

    <div class="mb-3">

        <label>Foto Sekolah</label>

        <input type="file" name="foto_sekolah" class="form-control">

    </div>

    <button type="submit" name="proses" value="<?= ($id == '') ? 'simpan' : 'ubah' ?>" class="btn btn-primary">

        Simpan

    </button>

</form>