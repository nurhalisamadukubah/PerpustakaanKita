<?php
    include "header.php";
    include "koneksi.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Data Kategori
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="kategoritambah.php" class="btn btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Data Kategori</a>
                            </div>
                            <div class="col">
                                <form class="form-inline float-right" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light small" autofocus placeholder="Nama Kategori..." name="keyword">
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
                                            <th>No</th>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>
                                            <th>Lokasi</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            if(isset($_GET['cari'])){
                                                $keyword=$_GET['keyword'];
                                                $query=mysqli_query($conn,"SELECT * FROM kategori
                                                                           WHERE nama_kategori like '%$keyword%'");
                                            }else{
                                                $query=mysqli_query($conn,"SELECT * FROM kategori");
                                            }
                                            $no=1;
                                            while($data=mysqli_fetch_array($query)){ ?>
                                                    <tr>
                                                        <td><?php echo $no;?></td>
                                                        <td><?php echo $data['id_kategori'];?></td>
                                                        <td><?php echo $data['nama_kategori'];?></td>
                                                        <td><?php echo $data['lokasi'];?></td>
                                                        <td>
                                                            <div class='row'>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="kategoriedit.php?id_kategori=<?php echo $data['id_kategori'];?>" class="btn btn-sm btn-warning"> 
                                                                    <i class='fa fa-edit'></i> Edit</a>
                                                                </div>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="hapus.php?id_kategori=<?php echo $data['id_kategori'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin');">
                                                                    <i class='fa fa-trash'></i> Hapus</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                            <?php          
                                                $no++;
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