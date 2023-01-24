<?php
    include "header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Pengembalian
                    </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <form action="kembalisimpan.php" method="POST">
                                        <div class="form-group">
                                            <label for="">ID Kembali</label>
                                            <input type="text" class="form-control" name="id_kembali" id="id_kembali" autofocus placeholder="ID kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Pinjam</label>
                                            <input type="text" class="form-control" name="id_pinjam" id="id_pinjam" placeholder="ID Pinjam">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Batas</label>
                                            <input type="date" class="form-control" name="tgl_batas" id="tgl_batas" placeholder="Tanggal Harus Kembali">
                                        </div>
                                </div>
                                <div class="col">
                                        <div class="form-group">
                                            <label for="">Tanggal kembali</label>
                                            <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" placeholder="Tanggal kembali">
                                        </div>
                                        <div class="form-group">
                                            <label for="">ID Admin</label>
                                            <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="ID Admin">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Denda</label>
                                            <input type="text" class="form-control" name="denda" id="denda" placeholder="Jumlah Denda">
                                        </div>                                                                           
                                            <input type="submit" class="btn btn-success form-inline float-right mt-4" name="simpan" value="simpan">
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