<?php

include "koneksi.php";

$nama = $_GET['nama'];
$id = $_GET['id'];
$id_kategori = $_GET['id_kategori'];

echo "
<h2> Nama = $nama</h2>
<h2> Id = $id</h2>
<h2> Id Kategori = $id_kategori</h2>

";

$query = mysqli_query($koneksi, "insert into tb_skincare(`nama`, `id`, `id_kategori`)VALUES('$nama', '$id', '$id_kategori')");
header("Location: tampil.php");

?>
?>