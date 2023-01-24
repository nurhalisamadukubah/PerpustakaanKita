<?php
    include "koneksi.php";
    $id_pinjam=$_POST['id_pinjam'];
    $id_anggota=$_POST['id_anggota'];
    $id_buku=$_POST['id_buku'];
    $tgl_pinjam=$_POST['tgl_pinjam'];
    $tgl_batas=$_POST['tgl_batas'];
    $id_admin=$_POST['id_admin'];
    $query=mysqli_query($conn, "INSERT INTO pinjam VALUES ('$id_pinjam','$id_anggota','$id_buku','$tgl_pinjam','$tgl_batas','$id_admin')");
    if(mysqli_affected_rows($conn)){
        echo "<script>
                  alert('Data Berhasil Ditambahkan');
                  document.location.href='pinjam.php';
              </script>      
            ";
    }else{
        echo "data gagal ditambahkan";
    }
?>