<?php
session_start();

include_once 'koneksi.php';

include_once 'models/Member.php';
include_once 'models/Level.php';
include_once 'models/Studies.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tugas 1 Pemrograman Web</title>

    <!-- Bootstrap Lux -->
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.8/dist/lux/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
include_once 'templates/header.php';
include_once 'templates/menu.php';
?>

    <div class="container mt-3">
        <div class="row">

            <?php include_once 'templates/sidebar.php'; ?>

            <div class="col-md-9">

                <?php
            $hal = isset($_GET['hal']) ? $_GET['hal'] : 'home';

            if(file_exists('pages/'.$hal.'.php')){
                include_once 'pages/'.$hal.'.php';
            }
            else{
                include_once 'pages/home.php';
            }
            ?>

            </div>

        </div>
    </div>

    <?php include_once 'templates/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>