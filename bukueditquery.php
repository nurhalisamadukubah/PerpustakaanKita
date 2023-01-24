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

            if($foto_sampul != ''){
                move_uploaded_file($source, $folder.$foto_sampul);
                $query=mysqli_query($conn,"UPDATE buku SET
                                    isbn='$isbn',
                                    judul='$judul',
                                    nama_penulis='$nama_penulis',
                                    nama_kategori='$nama_kategori',
                                    th_terbit='$th_terbit',
                                    jumlah_buku='$jumlah_buku',
                                    foto_sampul='$foto_sampul'
                                    WHERE id_buku='$id_buku'");

            }else{
                $query=mysqli_query($conn,"UPDATE buku SET
                                    isbn='$isbn',
                                    judul='$judul',
                                    nama_penulis='$nama_penulis',
                                    nama_kategori='$nama_kategori',
                                    th_terbit='$th_terbit',
                                    jumlah_buku='$jumlah_buku',
                                    foto_sampul='$foto_sampul'
                                    WHERE id_buku='$id_buku'");

            }
        }
        if(mysqli_affected_rows($conn)){
            echo "<script>
                      alert('Data Berhasil Edit');
                      document.location.href='buku.php';
                  </script>      
                ";
        }else{
            echo "data gagal diedit";
        }
?>