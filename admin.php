<?php
    include "header.php";
    include "koneksi.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="min-height: 520px">
                <div class="card">
                    <div class="card-header">
                        Data Admin
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <a href="admintambah.php" class="btn btn-primary"><i class="fas fa-plus fa-sm"></i> Tambah Data Admin</a>
                            </div>
                            <div class="col">
                                <form class="form-inline float-right" method="GET">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light small" autofocus placeholder="Username..." name="keyword">
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
                                            <th>ID Admin</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th colspan="2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php
                                            if(isset($_GET['cari'])){
                                                $keyword=$_GET['keyword'];
                                                $query=mysqli_query($conn,"SELECT * FROM admin
                                                                           WHERE uname like '%$keyword%'");
                                            }else{
                                                $query=mysqli_query($conn,"SELECT * FROM admin");
                                            }
                                            $no=1;
                                            while($data=mysqli_fetch_array($query)){ ?>
                                                    <tr>
                                                        <td><?php echo $no;?></td>
                                                        <td><?php echo $data['id_admin'];?></td>
                                                        <td><?php echo $data['uname'];?></td>
                                                        <td><?php echo $data['password'];?></td>
                                                        <td>
                                                            <div class='row'>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="adminedit.php?id_admin=<?php echo $data['id_admin'];?>" class="btn btn-sm btn-warning"> 
                                                                    <i class='fa fa-edit'></i> Edit</a>
                                                                </div>
                                                                <div class='col d-flex justify-content-center'>
                                                                    <a href="adminhapus.php?id_admin=<?php echo $data['id_admin'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin');">
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