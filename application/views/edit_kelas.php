<!DOCTYPE html>
<html>
<head>
    <title>Edit Kelas</title>
</head>
<body>
    <h2>Edit Kelas</h2>
    <form method="post" action="<?php echo site_url('crudkelas/update'); ?>">
        <input type="hidden" name="id" value="<?php echo $tabel_kelas->id; ?>">

        <label>Kode Kelas:</label>
        <input type="text" name="kode_kelas" value="<?php echo $tabel_kelas->kode_kelas; ?>" required><br><br>

        <label>Nama Kelas:</label>
        <input type="text" name="nama_kelas" value="<?php echo $tabel_kelas->nama_kelas; ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
