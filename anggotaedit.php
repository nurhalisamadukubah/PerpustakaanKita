<?php
    include "header.php";
    include "koneksi.php";
    $query=mysqli_query($conn,"SELECT * FROM anggota WHERE id_anggota='$_GET[id_anggota]'");
    $data=mysqli_fetch_array($query);
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Tambah data Anggota
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="anggotaeditquery.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">ID Anggota</label>
                                            <input type="text" class="form-control" name="id_anggota" id="id_anggota" value="<?php echo $data['id_anggota']?>" readonly placeholder="ID Anggota">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Anggota</label>
                                            <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" value="<?php echo $data['nama_anggota']?>" autofocus placeholder="Nama Anggota">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data['alamat']?>" placeholder="Alamat">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Telepon</label>
                                            <input type="text" class="form-control" name="tlp" id="tlp" value="<?php echo $data['tlp']?>" placeholder="Telepon">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="file" class="form-control" name="foto_anggota" id="foto_anggota" value="<?php echo $data['foto_anggota']?>" placeholder="">
                                        </div>                                                                                
                                        <input type="submit" class="btn btn-primary form-inline float-right" name="simpan" value="simpan">
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
<?php
    include "footer.html";
?>