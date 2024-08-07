<?php
    $koneksi = mysqli_connect('localhost', 'root', '', 'latihan_crud_yaya');

    if (!$koneksi){
        die(mysqli_connect_error($koneksi));
    }
?>