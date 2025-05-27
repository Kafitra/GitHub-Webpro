<!DOCTYPE html>
<html>
<head>
    <title>Edit Mata Kuliah</title>
</head>
<body>
    <h2>Edit Mata Kuliah</h2>
    <form method="post" action="<?php echo site_url('crudmatkul/update'); ?>">
        <input type="hidden" name="id" value="<?php echo $matkul->id; ?>">
        <label>Nama dosen:</label>
        <input type="text" name="nama_dosen" value="<?php echo $matkul->nama_dosen; ?>" required><br><br>
        <label>Nama Mata Kuliah:</label>
        <input type="text" name="nama_matkul" value="<?php echo $matkul->nama_matkul; ?>" required><br><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
