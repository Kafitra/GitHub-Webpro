<!DOCTYPE html>
<html>
<head>
    <title>Tambah Dosen</title>
</head>
<body>

    <h2>Tambah Dosen</h2>

    <form method="post" action="<?php echo site_url('cruddosen/simpan'); ?>">
        <label>Nama</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIDN</label><br>
        <input type="text" name="nidn" required><br><br>

        <button type="submit">Simpan</button>
    </form>

</body>
</html>
