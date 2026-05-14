<?php
// proses form get
$nama = "";
$alamat = "";

if(isset($_GET['proses'])){
    $nama = $_GET['nama'] ??"";
    $alamat = $_GET['alamat'] ??"";
}
?>

<h3>Form GET</h3>
<form method="GET">
    <label>Nama</label><br>
    <input type="text" name="nama"><br>

    <label>Alamat</label><br>
    <input name="alamat"></textarea><br>

    <input type="submit" name="proses" value= "Simpan">
</form>
<hr>




<?php
// proses form post
$nama = "";
$alamat = "";

if(isset($_POST['proses'])){
    $nama = $_POST['nama'] ??"";
    $alamat = $_POST['alamat'] ??"";
}
?>

<h3>Form POST</h3>
<form method="GET">
    <label>Username</label><br>
    <input type="text" name="username"><br>

    <label>Password</label><br>
    <input type="password" name="pw"><br>
    
    <input type="submit" name="login" value= "Login">
</form>

<?php if (isset($_POST['login'])): ?>
    <p>
        <strong>Hasil POST:</strong><br>
        Hello <?= htmlspecialchars($username) ?>
        Password Anda <?= htmlspecialchars($pw) ?>
    </p>
<?php endif; ?>