<?php
    include "koneksi.php";
    $id_buku=$_GET['id_buku'];
    $sql="DELETE FROM buku WHERE id_buku='$id_buku'";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn))
                {
                    echo "
                        <script>
                            alert ('Data Berhasil Dihapus');
                            document.location.href='buku.php';
                        </script>";
                    }else{
                        echo 'Data Gagal Dihapus';
                    }
?>