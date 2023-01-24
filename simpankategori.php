<?php
    include "koneksi.php";
    $id_kategori=$_POST['id_kategori'];
    $nama_kategori=$_POST['nama_kategori'];
    $lokasi=$_POST['lokasi'];
    $query=mysqli_query($conn, "INSERT INTO kategori VALUES ('$id_kategori','$nama_kategori','$lokasi')");
    if(mysqli_affected_rows($conn)){
        echo "<script>
                  alert('Data Berhasil Ditambahkan');
                  document.location.href='kategori.php';
              </script>      
            ";
    }else{
        echo "data gagal ditambahkan";
    }
?>