<?php
    include "header.php";
    include "koneksi.php";
    $query=mysqli_query($conn,"SELECT * FROM pinjam WHERE id_pinjam='$_GET[id_pinjam]'");
    $data=mysqli_fetch_array($query);
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Sunting Data Peminjaman
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="pinjameditquery.php" method="POST">
                                        <div class="form-group">
                                            <label for="">ID Pinjam</label>
                                            <input type="text" class="form-control" name="id_pinjam" id="id_pinjam" value="<?php echo $data['id_pinjam']?>" readonly placeholder="ID pinjam">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Anggota</label>
                                            <input type="text" class="form-control" name="id_anggota" id="id_anggota" value="<?php echo $data['id_anggota']?>" autofocus placeholder="ID Anggota">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Buku</label>
                                            <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?php echo $data['id_buku']?>" placeholder="ID Buku">
                                        </div>
                                </div>
                                <div class="col">
                                        <div class="form-group">
                                            <label for="">Tanggal Pinjam</label>
                                            <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" value="<?php echo $data['tgl_pinjam']?>" placeholder="Tanggal Pinjam">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Batas</label>
                                            <input type="date" class="form-control" name="tgl_batas" id="tgl_batas" value="<?php echo $data['tgl_batas']?>" placeholder="Tanggal Harus Kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Admin</label>
                                            <input type="text" class="form-control" name="id_admin" id="id_admin" value="<?php echo $data['id_admin']?>" placeholder="ID Admin">
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