<?php
    include "koneksi.php";
    $id_anggota=$_GET['id_anggota'];
    $sql="DELETE FROM anggota WHERE id_anggota='$id_anggota'";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn))
                {
                    echo "
                        <script>
                            alert ('Data Berhasil Dihapus');
                            document.location.href='anggota.php';
                        </script>";
                    }else{
                        echo 'Data Gagal Dihapus';
                    }
?>