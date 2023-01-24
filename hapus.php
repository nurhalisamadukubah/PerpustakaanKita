<?php
    include "koneksi.php";
    $id_kategori=$_GET['id_kategori'];
    $sql="DELETE FROM kategori WHERE id_kategori='$id_kategori'";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn))
                {
                    echo "
                        <script>
                            alert ('Data Berhasil Dihapus');
                            document.location.href='kategori.php';
                        </script>";
                    }else{
                        echo 'Data Gagal Dihapus';
                    }
?>