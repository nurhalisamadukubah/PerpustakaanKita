<?php
    include "header.php";
    include "koneksi.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Data Pengembalian Buku
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="kembalitambah.php" class="btn btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Data Pengembalian</a>
                            </div>
                            <div class="col">
                                <form class="form-inline float-right" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light small" autofocus placeholder="ID Pengembalian" name="keyword">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary"name="cari" value="cari">
                                            <i class="fas fa-search fa-sm"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered tables-striped mt-3">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>ID Kembali</th>
                                            <th>ID Pinjam</th>
                                            <th>Tanggal Batas</th>
                                            <th>Tanggal Kembali</th>
                                            <th>ID Admin</th>
                                            <th>Denda</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </class=>
                                    <tbody>
                                        <tr>
                                            <?php
                                            if(isset($_GET['cari'])){
                                                $keyword=$_GET['keyword'];
                                                $query=mysqli_query($conn,"SELECT * FROM kembali
                                                                           WHERE id_kembali like '%$keyword%'");
                                            }else{
                                                $query=mysqli_query($conn,"SELECT kembali.id_kembali, pinjam.id_pinjam, pinjam.tgl_batas, kembali.tgl_kembali, pinjam.id_admin, kembali.denda FROM kembali
                                                                            JOIN pinjam ON pinjam.id_pinjam = kembali.id_pinjam");
                                            }
                                            $no=1;
                                            while($data=mysqli_fetch_array($query)){ ?>
                                                    <tr>
                                                        <td><?php echo $data['id_kembali'];?></td>
                                                        <td><?php echo $data['id_pinjam'];?></td>
                                                        <td><?php echo $data['tgl_batas'];?></td>
                                                        <td><?php echo $data['tgl_kembali'];?></td>
                                                        <td><?php echo $data['id_admin'];?></td>
                                                        <td><?php echo $data['denda'];?></td>
                                                        <td>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="kembaliedit.php?id_kembali=<?php echo $data['id_kembali'];?>" class="btn btn-sm btn-warning"> 
                                                                    <i class='fa fa-edit'></i> Edit</a>
                                                                </div>
                                                        </td>
                                                        <td>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="kembalihapus.php?id_kembali=<?php echo $data['id_kembali'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin');">
                                                                    <i class='fa fa-trash'></i> Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            <?php
                                            } 
                                            ?>
                                        </tr>
                                    </tbody>
                                </table>
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