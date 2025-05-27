<h2>Edit Data Mahasiswa</h2>

<form action="<?php echo site_url('crudmahasiswa/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $mahasiswa->id; ?>">
    
    Nama: <input type="text" name="nama" value="<?php echo $mahasiswa->nama; ?>" required><br><br>
    NPM: <input type="text" name="npm" value="<?php echo $mahasiswa->npm; ?>" required><br><br>
    Alamat: <textarea name="alamat" required><?php echo $mahasiswa->alamat; ?></textarea><br><br>
    Email: <input type="email" name="email" value="<?php echo $mahasiswa->email; ?>" required><br><br>
    Prodi: <input type="text" name="prodi" value="<?php echo $mahasiswa->prodi; ?>" required><br><br>

    <button type="submit">Update</button>
</form>
<br>
<?php echo anchor('crudmahasiswa', 'Kembali'); ?>
