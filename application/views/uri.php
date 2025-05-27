<!DOCTYPE html>
<html>
<head>
    <title>Homepage | Univ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">CRUD Kampus</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><?php echo anchor('template', 'Home', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('page/tabel_mahasiswa', 'Mahasiswa', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('page/daftar_matkul', 'Mata Kuliah', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('page/tabel_kelas', 'Kelas', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('page/tabel_dosen', 'Dosen', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('auth/logout', 'Logout', ['class' => 'nav-link']); ?></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container text-center">
    <h1>Selamat datang</h1>
    <p>Ini adalah halaman utama website</p>
</div>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
