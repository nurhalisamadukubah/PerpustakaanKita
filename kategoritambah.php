<?php
    include "header.php";
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
                                    <form action="simpankategori.php" method="POST">
                                        <div class="form-group">
                                            <label for="">ID Kategori</label>
                                            <input type="text" class="form-control" name="id_kategori" id="id_kategori" placeholder="ID Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Kategori</label>
                                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" placeholder="Nama Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Lokasi</label>
                                            <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi">
                                        </div>
                                        <input type="submit" class="btn btn-primary form-inline float-right" value="simpan">
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