<?php
    include "koneksi.php";
    $id_pinjam=$_GET['id_pinjam'];
    $sql="DELETE FROM pinjam WHERE id_pinjam='$id_pinjam'";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn))
                {
                    echo "
                        <script>
                            alert ('Data Berhasil Dihapus');
                            document.location.href='pinjam.php';
                        </script>";
                    }else{
                        echo 'Data Gagal Dihapus';
                    }
?>