<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kelas</title>
</head>
<body>
    <h2>Tambah Kelas</h2>
    <form method="post" action="<?php echo site_url('crudkelas/tambah_aksi'); ?>">
        <label>Kode Kelas:</label>
        <input type="text" name="kode_kelas" required><br><br>

        <label>Nama Kelas:</label>
        <input type="text" name="nama_kelas" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
