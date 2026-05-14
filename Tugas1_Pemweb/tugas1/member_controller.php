<?php

session_start();

include_once 'koneksi.php';
include_once 'models/Member.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = [
    $username,
    $password
];

$obj = new Member();

$rs = $obj->cekLogin($data);

if ($rs) {

    $_SESSION['MEMBER'] = $rs;

    header('location:index.php');
} else {

    echo "
    <script>
        alert('Login gagal');
        history.back();
    </script>
    ";
}
