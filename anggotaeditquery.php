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

            if($foto_anggota != ''){
                move_uploaded_file($source, $folder.$foto_anggota);
                $query=mysqli_query($conn,"UPDATE anggota SET
                                    foto_anggota='$foto_anggota',
                                    nama_anggota='$nama_anggota',
                                    alamat='$alamat',
                                    tlp='$tlp'
                                    WHERE id_anggota='$id_anggota'");

            }else{
                $query=mysqli_query($conn,"UPDATE anggota SET
                                    foto_anggota='$foto_anggota',
                                    nama_anggota='$nama_anggota',
                                    alamat='$alamat',
                                    tlp='$tlp'
                                    WHERE id_anggota='$id_anggota'");

            }
        }
        if(mysqli_affected_rows($conn)){
            echo "<script>
                      alert('Data Berhasil Edit');
                      document.location.href='anggota.php';
                  </script>      
                ";
        }else{
            echo "data gagal diedit";
        }
?>