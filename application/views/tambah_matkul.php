<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mata Kuliah</title>
</head>
<body>
    <h2>Tambah Mata Kuliah</h2>
    <form method="post" action="<?php echo site_url('crudmatkul/tambah_aksi'); ?>">
        <label>Nama Dosen:</label>
        <input type="text" name="nama_dosen" required><br><br>
        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matkul" required><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
