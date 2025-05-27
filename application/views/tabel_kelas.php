<!DOCTYPE html>
<html>
<head>
    <title>Tabel Kelas | Univ</title>
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
    <p class="text-center">Ini adalah halaman tabel kelas</p>

    <div class="text-center mb-3">
        <?php echo anchor('crudkelas/tambah', 'Tambah Data', ['class' => 'btn btn-primary']); ?>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode Kelas</th>
                <th>Nama Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if (!empty($tabel_kelas)) {
                $no = 1;
                foreach ($tabel_kelas as $k) { 
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $k->kode_kelas; ?></td>
                <td><?php echo $k->nama_kelas; ?></td>
                <td>
                    <?php echo anchor('crudkelas/edit/' . $k->id, 'Edit', ['class' => 'btn btn-warning btn-sm']); ?>
                    <?php echo anchor('crudkelas/hapus/' . $k->id, 'Hapus', ['class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Yakin ingin menghapus?')"]); ?>
                </td>
            </tr>
            <?php 
                }
            } else {
            ?>
            <tr>
                <td colspan="4" class="text-center">Data tidak tersedia</td>
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
