<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="proses-update.php" method="post">
        <?php
        include '../../koneksi.php';
        $nama = $_GET['nama'];
        $query = mysqli_query($koneksi, "select * from siswa where nama='$nama'");
        $siswa = mysqli_fetch_array($query);
        ?>
        <input type="hidden" name="nama" value="<?= $siswa['Nama'] ?>">
        <p> Umur <input type="number" name="umur" id="" value="<?= $siswa['Umur'] ?>"> </p>
        <button type="submit">Edit</button>
    </form>
</body>

</html>