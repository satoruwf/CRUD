<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $umur= $_POST['umur'];

    $sql = "insert into siswa values('$nama', '$umur')";
    $query = mysqli_query($koneksi, $sql);

    if (!$query) {
        die(my_sqli_error($koneksi));
    }

     header("Location: index.php");
?>