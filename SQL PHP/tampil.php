<?php
//(koneksi)
include "koneksi.php";


//Perintah menggunakan (menyeleksi dan memasukan)
$query = mysqli_query($koneksi, "select * from tb_skincare");


// mengambil 1 data 
//$data = mysqli_fetch_array($query); (menggunakan array) atau bisa langsung
//$data["nama data array"];

// Untuk menggunakan perulangan
// while($data = mysqli_fetch_array($query)){
// echo "Kode : ".$data["id"]."<br/>" ;
// echo "Nama Produk : ".$data["nama"];
// echo "<hr/>";
// }
 ?>
<table border='1'>
<tr>
            <td>Id</td>
            <td>Nama</td>
            <td>Id Kategori</td>

        </tr>

    <?php while($data = mysqli_fetch_array($query)){ ?>
    
        
        <tr>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['nama']?></td>
            <td><?php echo $data['id_kategori']?></td>
        </tr>  


<?php } ?>

</table>