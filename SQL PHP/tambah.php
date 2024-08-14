<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "insert into tb_skincare(`id`,`nama`)VALUES('002', 'Face Wash')");
header("Location: tampil.php");

?>