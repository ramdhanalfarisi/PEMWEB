<!-- <div class="card shadow-sm border-0 p-4">

    <h1 class="mb-4">
        <i class="bi bi-person-badge"></i>
        Profil Saya
    </h1>

    <hr>

    <div class="row mt-4">

        <div class="col-md-4">

            <p>
                <i class="bi bi-person text-success"></i>
                Nama Lengkap
            </p>

            <p>
                <i class="bi bi-123 text-primary"></i>
                NIM
            </p>

            <p>
                <i class="bi bi-calendar text-warning"></i>
                TTL
            </p>

            <p>
                <i class="bi bi-geo-alt text-danger"></i>
                Alamat
            </p>

            <p>
                <i class="bi bi-mortarboard text-dark"></i>
                Prodi
            </p>

            <p>
                <i class="bi bi-building text-success"></i>
                Universitas
            </p>

            <p>
                <i class="bi bi-envelope text-primary"></i>
                Email
            </p>

        </div>

        <div class="col-md-8">

            <p>
                : <strong>Ramdhan Alfarisi</strong>
            </p>

            <p>
                : 0110225129
            </p>

            <p>
                : Depok, 15 Desember 2006
            </p>

            <p>
                : Jl Guntur atas rt 04/05 Kel.Limo Kec.Limo Kota Depok
            </p>

            <p>
                : Teknik Informatika
            </p>

            <p>
                : STT Terpadu Nurul Fikri
            </p>

            <p>
                : 0110225129@student.nurulfikri.ac.id
            </p>

        </div>

    </div>

    <div class="mt-4">

        <a href="index.php?hal=about" class="btn btn-dark">

            <i class="bi bi-person"></i>
            About Me

        </a>

        <a href="index.php?hal=contact" class="btn btn-outline-success">

            <i class="bi bi-envelope"></i>
            Contact

        </a>

    </div>

</div> -->

<style>
.profile-card {
    border-radius: 16px;
    overflow: hidden;
}

.profile-left {
    background: linear-gradient(160deg, #1e3a5f 0%, #2d6a9f 50%, #3d8fd1 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2.5rem 1.5rem;
    min-height: 340px;
    position: relative;
}

.profile-avatar-wrapper {
    position: relative;
    width: 130px;
    height: 130px;
    margin-bottom: 1rem;
}

.profile-avatar-wrapper img,
.profile-avatar-wrapper .avatar-placeholder {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    border: 4px solid rgba(255, 255, 255, 0.8);
    object-fit: cover;
    background: rgba(255, 255, 255, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: rgba(255, 255, 255, 0.7);
}

.btn-upload-foto {
    position: absolute;
    bottom: 4px;
    right: 4px;
    background: white;
    border: none;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
    color: #2d6a9f;
    transition: transform 0.2s;
}

.btn-upload-foto:hover {
    transform: scale(1.1);
}

.profile-left h5 {
    color: white;
    font-weight: 600;
    margin-bottom: 0.3rem;
    text-align: center;
}

.profile-badge {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border-radius: 20px;
    padding: 3px 14px;
    font-size: 0.82rem;
    backdrop-filter: blur(4px);
}

.profile-right {
    padding: 2rem 2rem 1.5rem;
}

.profile-info-row {
    display: flex;
    align-items: flex-start;
    padding: 0.45rem 0;
    border-bottom: 1px solid #f0f0f0;
}

.profile-info-row:last-child {
    border-bottom: none;
}

.profile-label {
    min-width: 160px;
    color: #555;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.93rem;
}

.profile-label i {
    width: 18px;
}

.profile-value {
    color: #222;
    font-size: 0.93rem;
}
</style>

<!-- Header Sambutan -->
<div class="mb-4">
    <h3 class="fw-bold">👋 Halo, Selamat Datang!!!</h3>
</div>

<!-- Form upload tersembunyi -->
<form action="upload_profil.php" method="POST" enctype="multipart/form-data" id="formFoto">
    <input type="file" name="foto" id="inputFoto" accept="image/*" style="display:none"
        onchange="document.getElementById('formFoto').submit()">
</form>

<!-- Card Profil -->
<div class="card shadow-sm border-0 profile-card">
    <div class="row g-0">

        <!-- Kolom Kiri: Foto -->
        <div class="col-md-4 col-lg-3 profile-left">
            <div class="profile-avatar-wrapper">
                <?php if (!empty($_SESSION['foto_profile']) && file_exists('uploads/' . $_SESSION['foto_profile'])): ?>
                <img src="uploads/<?= htmlspecialchars($_SESSION['foto_profile']) ?>" alt="Foto Profil">
                <?php else: ?>
                <div class="avatar-placeholder justify-content-center">
                    <i class="bi bi-person-fill"></i>
                </div>
                <?php endif; ?>

                <!-- Tombol ganti foto -->
                <button class="btn-upload-foto" title="Ganti Foto"
                    onclick="document.getElementById('inputFoto').click()">
                    <i class="bi bi-camera-fill" style="font-size:0.8rem;"></i>
                </button>
            </div>

            <h5>Ramdhan Alfarisi</h5>
            <span class="profile-badge" >Mahasiswa Teknik Informatika</span>
        </div>

        <!-- Kolom Kanan: Info -->
        <div class="col-md-8 col-lg-9 profile-right">

            <h4 class="mb-1">
                <i class="bi bi-person-badge text-primary me-2"></i>
                Profil Saya
            </h4>
            <hr class="mt-2 mb-3">

            <div class="profile-info-row">
                <span class="profile-label">
                    <i class="bi bi-person text-success"></i> Nama Lengkap
                </span>
                <span class="profile-value">: <strong>Ramdhan Alfarisi</strong></span>
            </div>

            <div class="profile-info-row">
                <span class="profile-label">
                    <i class="bi bi-123 text-primary"></i> NIM
                </span>
                <span class="profile-value">: 0110225129</span>
            </div>

            <div class="profile-info-row">
                <span class="profile-label">
                    <i class="bi bi-calendar text-warning"></i> TTL
                </span>
                <span class="profile-value">: Depok, 15 Desember 2006</span>
            </div>

            <div class="profile-info-row">
                <span class="profile-label">
                    <i class="bi bi-geo-alt text-danger"></i> Alamat
                </span>
                <span class="profile-value">: Jl Guntur atas rt 04/05 Kel.Limo Kec.Limo Kota Depok</span>
            </div>

            <div class="profile-info-row">
                <span class="profile-label">
                    <i class="bi bi-mortarboard text-dark"></i> Prodi
                </span>
                <span class="profile-value">: Teknik Informatika</span>
            </div>

            <div class="profile-info-row">
                <span class="profile-label">
                    <i class="bi bi-building text-success"></i> Universitas
                </span>
                <span class="profile-value">: STT Terpadu Nurul Fikri</span>
            </div>

            <div class="profile-info-row">
                <span class="profile-label">
                    <i class="bi bi-envelope text-primary"></i> Email
                </span>
                <span class="profile-value">: 0110225129@student.nurulfikri.ac.id</span>
            </div>

            <!-- Tombol Aksi -->
            <div class="mt-4 d-flex gap-2">
                <a href="index.php?hal=about" class="btn btn-dark">
                    <i class="bi bi-person me-1"></i> About Me
                </a>
                <a href="index.php?hal=contact" class="btn btn-outline-success">
                    <i class="bi bi-envelope me-1"></i> Contact
                </a>
            </div>

        </div>
    </div>
</div>