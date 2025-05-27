<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>

    <h2>Tambah Data Mahasiswa</h2>

    <form action="<?php echo site_url('crudmahasiswa/tambah_aksi'); ?>" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>NPM</td>
                <td><input type="text" name="npm" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td><input type="text" name="prodi" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>

    <br>
    <?php echo anchor('page/tabel_mahasiswa', 'Kembali'); ?>

</body>
</html>
