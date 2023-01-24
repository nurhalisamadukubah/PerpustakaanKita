<?php
    include "koneksi.php";
    $id_kembali=$_POST['id_kembali'];
    $id_pinjam=$_POST['id_pinjam'];
    $tgl_batas=$_POST['tgl_batas'];
    $tgl_kembali=$_POST['tgl_kembali'];
    $id_admin=$_POST['id_admin'];
    $denda=$_POST['denda'];
    $query=mysqli_query($conn, "INSERT INTO kembali VALUES ('$id_kembali','$id_pinjam','$tgl_batas','$tgl_kembali','$id_admin','$denda')");
    if(mysqli_affected_rows($conn)){
        echo "<script>
                  alert('Data Berhasil Ditambahkan');
                  document.location.href='kembali.php';
              </script>      
            ";
    }else{
        echo "data gagal ditambahkan";
    }
?>