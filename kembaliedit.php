<?php
    include "header.php";
    include "koneksi.php";
    $query=mysqli_query($conn,"SELECT * FROM kembali WHERE id_kembali='$_GET[id_kembali]'");
    $data=mysqli_fetch_array($query);
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Sunting Data Pengembalian
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="kembalieditquery.php" method="POST">
                                        <div class="form-group">
                                            <label for="">ID kembali</label>
                                            <input type="text" class="form-control" name="id_kembali" id="id_kembali" value="<?php echo $data['id_kembali']?>" readonly placeholder="ID kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Pinjam</label>
                                            <input type="text" class="form-control" name="id_pinjam" id="id_pinjam" value="<?php echo $data['id_pinjam']?>" autofocus placeholder="ID pinjam">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Batas</label>
                                            <input type="date" class="form-control" name="tgl_batas" id="tgl_batas" value="<?php echo $data['tgl_batas']?>" placeholder="Tanggal Harus Kembali">
                                        </div>
                                </div>
                                <div class="col">
                                        <div class="form-group">
                                            <label for="">Tanggal kembali</label>
                                            <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" value="<?php echo $data['tgl_kembali']?>" placeholder="Tanggal kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Admin</label>
                                            <input type="text" class="form-control" name="id_admin" id="id_admin" value="<?php echo $data['id_admin']?>" placeholder="ID Admin">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Denda</label>
                                            <input type="text" class="form-control" name="denda" id="denda" value="<?php echo $data['denda']?>" placeholder="Denda">
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