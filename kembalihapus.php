<?php
    include "koneksi.php";
    $id_kembali=$_GET['id_kembali'];
    $sql="DELETE FROM kembali WHERE id_kembali='$id_kembali'";
    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn))
                {
                    echo "
                        <script>
                            alert ('Data Berhasil Dihapus');
                            document.location.href='kembali.php';
                        </script>";
                    }else{
                        echo 'Data Gagal Dihapus';
                    }
?>