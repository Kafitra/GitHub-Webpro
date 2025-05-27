<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
</head>
<body>

    <h2>Edit Dosen</h2>

    <form method="post" action="<?php echo site_url('cruddosen/update'); ?>">
        <input type="hidden" name="id" value="<?php echo $dosen->id; ?>">

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $dosen->nama; ?>" required><br><br>

        <label>NIDN</label><br>
        <input type="text" name="nidn" value="<?php echo $dosen->nidn; ?>" required><br><br>

        <button type="submit">Update</button>
    </form>

</body>
</html>
