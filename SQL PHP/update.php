<?php
include "koneksi.php";

$query = mysqli_query($koneksi, "UPDATE `tb_skincare` SET `nama`='Micellar Water' WHERE id = 001");


?>