<?php
    include "header.php";
    include "koneksi.php";
    $query=mysqli_query($conn,"SELECT * FROM kategori WHERE id_kategori='$_GET[id_kategori]'");
    $data=mysqli_fetch_array($query);
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Tambah data Kategori
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="kategorieditquery.php" method="POST">
                                        <div class="form-group">
                                            <label for="">ID Kategori</label>
                                            <input type="text" class="form-control" name="id_kategori" id="id_kategori" value="<?php echo $data['id_kategori']?>" readonly placeholder="ID Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Kategori</label>
                                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="<?php echo $data['nama_kategori']?>" autofocus placeholder="Nama Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?php echo $data['lokasi']?>" placeholder="Lokasi">
                                        </div>
                                        <input type="submit" class="btn btn-primary form-inline float-right" value="Edit Data">
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