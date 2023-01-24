<?php
    include "header.php";
    include "koneksi.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Data Anggota
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="anggotatambah.php" class="btn btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Data Anggota</a>
                            </div>
                            <div class="col">
                                <form class="form-inline float-right" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light small" autofocus placeholder="Nama Anggota..." name="keyword">
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
                                    <thead>
                                        <tr>
                                            <th>ID Anggota</th>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                            <?php
                                            if(isset($_GET['cari'])){
                                                $keyword=$_GET['keyword'];
                                                $query=mysqli_query($conn,"SELECT * FROM anggota
                                                                           WHERE nama_anggota like '%$keyword%'");
                                            }else{
                                                $query=mysqli_query($conn,"SELECT * FROM anggota");
                                            }
                                            $no=1;
                                            while($data=mysqli_fetch_array($query)){ ?>
                                                    <tr>
                                                        <td><?php echo $data['id_anggota'];?></td>
                                                        <td><img src="uploads/<?php echo $data['foto_anggota'];?>" width=100px></td>
                                                        <td><?php echo $data['nama_anggota'];?></td>
                                                        <td><?php echo $data['alamat'];?></td>
                                                        <td><?php echo $data['tlp'];?></td>
                                                        <td>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="anggotaedit.php?id_anggota=<?php echo $data['id_anggota'];?>" class="btn btn-sm btn-warning"> 
                                                                    <i class='fa fa-edit'></i> Edit</a>
                                                                </div>
                                                        </td>
                                                        <td>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="anggotahapus.php?id_anggota=<?php echo $data['id_anggota'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin');">
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