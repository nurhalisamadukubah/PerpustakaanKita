<?php
include "koneksi.php";
$id_kategori=$_POST["id_kategori"];
$nama_kategori=$_POST["nama_kategori"];
$lokasi=$_POST['lokasi'];
$query=mysqli_query($conn,"UPDATE kategori SET
                      nama_kategori='$nama_kategori',
                      lokasi='$lokasi'
                      WHERE id_kategori='$id_kategori'");
if(mysqli_affected_rows($conn)){
    echo "<script>
              alert('Data Berhasil Edit');
              document.location.href='kategori.php';
          </script>      
        ";
}else{
    echo "data gagal diedit";
}
?>