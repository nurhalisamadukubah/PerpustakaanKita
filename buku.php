<?php
    include "header.php";
    include "koneksi.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Data Buku
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="bukutambah.php" class="btn btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Data Buku</a>
                            </div>
                            <div class="col">
                                <form class="form-inline float-right" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light small" autofocus placeholder="Judul Buku..." name="keyword">
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
                                            <th>ID Buku</th>
                                            <th>ISBN</th>
                                            <th>Kategori</th>
                                            <th width="170px">Judul Buku</th>
                                            <th width="140px">Nama Penulis</th>
                                            <th>Jumlah</th>
                                            <th>Foto Sampul</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </class=>
                                    <tbody>
                                        <tr>
                                            <?php
                                            if(isset($_GET['cari'])){
                                                $keyword=$_GET['keyword'];
                                                $query=mysqli_query($conn,"SELECT * FROM buku
                                                                           WHERE judul like '%$keyword%'");
                                            }else{
                                                $query=mysqli_query($conn,"SELECT * FROM buku");
                                            }
                                            $no=1;
                                            while($data=mysqli_fetch_array($query)){ ?>
                                                    <tr>
                                                        <td><?php echo $data['id_buku'];?></td>
                                                        <td><?php echo $data['isbn'];?></td>
                                                        <td><?php echo $data['nama_kategori'];?></td>
                                                        <td><?php echo $data['judul'];?></td>
                                                        <td><?php echo $data['nama_penulis'];?></td>
                                                        <td><?php echo $data['jumlah_buku'];?></td>
                                                        <td><img src="uploads/<?php echo $data['foto_sampul'];?>" width=75px></td>
                                                        <td>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="bukuedit.php?id_buku=<?php echo $data['id_buku'];?>" class="btn btn-sm btn-warning"> 
                                                                    <i class='fa fa-edit'></i> Edit</a>
                                                                </div>
                                                        </td>
                                                        <td>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="bukuhapus.php?id_buku=<?php echo $data['id_buku'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin');">
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