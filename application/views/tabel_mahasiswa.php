<!DOCTYPE html>
<html>
<head>
    <title>Tabel Mahasiswa | Univ</title>
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
                <li class="nav-item"><?php echo anchor('crudmahasiswa', 'Mahasiswa', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('crudmatkul', 'Mata Kuliah', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('crudkelas', 'Kelas', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('cruddosen', 'Dosen', ['class' => 'nav-link']); ?></li>
                <li class="nav-item"><?php echo anchor('auth/logout', 'Logout', ['class' => 'nav-link']); ?></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <h1 class="text-center">Selamat datang</h1>
    <p class="text-center">Ini adalah halaman tabel mahasiswa</p>

    <div class="text-center mb-3">
        <?php echo anchor('crudmahasiswa/tambah', 'Tambah Data', ['class' => 'btn btn-primary']); ?>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (isset($tabel_mahasiswa) && !empty($tabel_mahasiswa)) {
                $no = 1;
                foreach ($tabel_mahasiswa as $u) { 
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $u->nama; ?></td>
                <td><?php echo $u->npm; ?></td>
                <td><?php echo $u->alamat; ?></td>
                <td><?php echo $u->email; ?></td>
                <td><?php echo $u->prodi; ?></td>
                <td>
                    <?php echo anchor('crudmahasiswa/edit/' . $u->id, 'Edit', ['class' => 'btn btn-warning btn-sm']); ?>
                    <?php echo anchor('crudmahasiswa/hapus/' . $u->id, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Yakin ingin menghapus?')"]); ?>
                </td>
            </tr>
            <?php 
                }
            } else {
            ?>
            <tr>
                <td colspan="7" class="text-center">Data Mahasiswa tidak tersedia.</td>
            </tr>
            <?php 
            } 
            ?>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
