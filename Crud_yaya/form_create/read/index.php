<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Semua Siswa</title>
</head>

<body>
    <div class="container" style="margin:0 auto; width:50%">
        <a href="../tambah-siswa.php">Tambah Siswa</a>
        <table border="1" align="center" width="50%">
            <tr>
                <td>
                    Nama
                </td>
                <td>
                    Umur
                </td>
                <td>
                    #
                </td>
            </tr>
            <?php
            include '../../koneksi.php';
            $query = mysqli_query($koneksi, 'select * from siswa');
            while ($siswa = mysqli_fetch_array($query)) {
            ?>

                <tr>
                    <td>
                        <?= $siswa['Nama'] ?>
                    </td>
                    <td>
                        <?= $siswa['Umur'] ?>
                    </td>
                    <td>
                        <a href="edit.php?nama=<?= $siswa['Nama'] ?>"><button type=" submit">Edit</button></a>
                        <a href="proses_hps.php?nama=<?= $siswa['Nama'] ?>"><button type=" submit">Delete</button></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>