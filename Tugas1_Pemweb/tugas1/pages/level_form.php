<?php

if (!isset($_SESSION['MEMBER'])) {
    header('location:index.php?hal=login');
}

$obj = new Level();

$id = isset($_GET['id']) ? $_GET['id'] : '';

if ($id != '') {
    $row = $obj->getLevel($id);
} else {
    $row = [];
}
?>

<h2>Form Level</h2>

<form method="POST" action="level_controller.php">

    <input type="hidden" name="id" value="<?= isset($row['id']) ? $row['id'] : '' ?>">

    <div class="mb-3">

        <label>Nama Level</label>

        <input type="text" name="nama" class="form-control" value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">

    </div>

    <button type="submit" name="proses" value="<?= ($id == '') ? 'simpan' : 'ubah' ?>" class="btn btn-primary">

        Simpan

    </button>

</form>