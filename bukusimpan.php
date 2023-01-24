<?php
    include "koneksi.php";

    if (isset($_POST['simpan'])){
        $id_buku=$_POST['id_buku'];
        $isbn=$_POST['isbn'];
        $judul=$_POST['judul'];
        $nama_penulis=$_POST['nama_penulis'];
        $nama_penerbit=$_POST['nama_penerbit'];
        $nama_kategori=$_POST['nama_kategori'];
        $th_terbit=$_POST['th_terbit'];
        $jumlah_buku=$_POST['jumlah_buku'];
        $foto_sampul=$_FILES['foto_sampul']['name'];
        $source=$_FILES['foto_sampul']['tmp_name'];
        $folder='./uploads/';

        move_uploaded_file($source, $folder.$foto_sampul);
        $query=mysqli_query($conn, "INSERT INTO buku VALUES ('$id_buku','$isbn','$judul','$nama_penulis','$nama_penerbit','$nama_kategori','$th_terbit','$jumlah_buku','$foto_sampul')");
        if(mysqli_affected_rows($conn)){
            echo "<script>
                      alert('Data Berhasil ditambahkan');
                      document.location.href='buku.php';
                  </script>      
                ";
        }else{
            echo "data gagal ditambahkan";
        }
    }
?>