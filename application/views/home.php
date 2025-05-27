<!DOCTYPE html>
<html>
<head>
    <title>Ini home</title>
</head>
<style>
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: blue;
        }
    </style>
<body>
    <?php echo anchor('navigasi/index', 'Home'); ?> |
    <?php echo anchor('page/tabel_mahasiswa', 'Mahasiswa'); ?> |
    <?php echo anchor('page/daftar_matkul', 'Mata Kuliah'); ?> |
    <?php echo anchor('page/tabel_kelas', 'Kelas'); ?> |
    <?php echo anchor('page/tabel_dosen', 'Dosen'); ?> |
    <?php echo anchor('auth/logout', 'Logout'); ?>
    
    <h1>Selamat datang</h1>
    <p>ini halaman home</p>

</body>
</html>
