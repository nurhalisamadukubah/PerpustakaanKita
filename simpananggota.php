<?php
    include "koneksi.php";
    if (isset($_POST['simpan'])){
    $id_anggota=$_POST['id_anggota'];
    $foto_anggota=$_FILES['foto_anggota']['name'];
    $source=$_FILES['foto_anggota']['tmp_name'];
    $folder='./uploads/';
    $nama_anggota=$_POST['nama_anggota'];
    $alamat=$_POST['alamat'];
    $tlp=$_POST['tlp'];

    move_uploaded_file($source, $folder.$foto_anggota);
    $query=mysqli_query($conn, "INSERT INTO anggota VALUES ('$id_anggota','$foto_anggota','$nama_anggota', '$alamat', '$tlp')");
    }

    if(mysqli_affected_rows($conn)){
        echo "<script>
                  alert('Data Berhasil ditambahkan');
                  document.location.href='anggota.php';
              </script>      
            ";
    }else{
        echo "data gagal ditambahkan";
    }
?>