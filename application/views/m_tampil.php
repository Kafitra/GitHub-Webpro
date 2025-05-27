<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
    <center>
        <h3>Membuat CRUD dengan CodeIgniter</h3>
        <?php echo anchor('crud/tambah', 'Tambah Data'); ?>
    </center>

    <table style="margin: 20px auto; border-collapse: collapse;" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            $no = 1;
            foreach ($user as $u) { 
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $u->nama; ?></td>
                <td><?php echo $u->alamat; ?></td>
                <td><?php echo $u->pekerjaan; ?></td>
                <td>
                    <?php echo anchor('crud/edit/' . $u->id, 'Edit'); ?> |
                    <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
