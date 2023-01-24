<?php
    include "header.php";
    include "koneksi.php";
    $query=mysqli_query($conn,"SELECT * FROM buku WHERE id_buku='$_GET[id_buku]'");
    $data=mysqli_fetch_array($query);
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Tambah data buku
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="bukueditquery.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">ID buku</label>
                                            <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?php echo $data['id_buku']?>" readonly placeholder="ID Buku">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ISBN</label>
                                            <input type="text" class="form-control" name="isbn" id="isbn" value="<?php echo $data['isbn']?>" autofocus placeholder="No ISBN Buku">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Judul buku</label>
                                            <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $data['judul']?>" placeholder="Judul Buku">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Penulis</label>
                                            <input type="text" class="form-control" name="nama_penulis" id="nama_penulis" value="<?php echo $data['nama_penulis']?>" placeholder="Nama Penulis">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Penerbit</label>
                                            <input type="text" class="form-control" name="nama_penerbit" id="nama_penerbit" value="<?php echo $data['nama_penerbit']?>" placeholder="Penerbit">
                                        </div>
                                    </div>
                                <div class="col">
                                        <div class="form-group">
                                            <label for="">Nama Kategori</label>
                                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori" value="<?php echo $data['nama_kategori']?>" placeholder="Nama Kategori">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tahun Terbit</label>
                                            <input type="date" class="form-control" name="th_terbit" id="th_terbit" value="<?php echo $data['th_terbit']?>" placeholder="Tahun Terbit">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jumlah</label>
                                            <input type="text" class="form-control" name="jumlah_buku" id="jumlah_buku" value="<?php echo $data['jumlah_buku']?>"placeholder="Jumlah">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="hidden" name="img" value="<?php echo $data['foto_sampul'];?>">
                                            <input type="file" class="form-control" name="foto_sampul" id="foto_sampul" value="<?php echo $data['foto_sampul']?>"placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <img src="uploads/<?php echo $data['foto_sampul'];?>" width=75px />
                                        </div>                                                                                
                                        <input type="submit" class="btn btn-primary form-inline float-right mt-4" name="simpan" value="simpan">
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