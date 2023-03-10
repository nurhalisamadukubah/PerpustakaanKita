<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERPUSTAKAAN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gradient-primary topbar mb-4 static-top shadow">
                    <img class="img-profile rounded-circle"
                            src="img/bookmarks.png" width="37px">
                    <div class="sidebar-brand-text text-white">PERPUSTAKAAN <sup>KITA</sup></div>
                

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link" href="login.php" id="login" >
                                <span class="mr-2 d-none d-lg-inline text-white small">Login Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

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
                                                <form class="form-inline float-right" method="GET">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control bg-light small" placeholder="Tulis Judul Buku..." name="keyword">
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
                                                            <th width="140px">Kategori</th>
                                                            <th width="170px">Judul Buku</th>
                                                            <th width="140px">Nama Penulis</th>
                                                            <th width="130px">Penerbit</th>
                                                            <th>Jumlah</th>
                                                            <th>Foto Sampul</th>
                                                            <th>Lokasi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="">
                                                        <tr>
                                                            <?php
                                                            if(isset($_GET['cari'])){
                                                                $keyword=$_GET['keyword'];
                                                                $query=mysqli_query($conn,"SELECT * FROM buku
                                                                                        JOIN kategori ON kategori.nama_kategori = buku.nama_kategori
                                                                                        WHERE judul like '%$keyword%'");
                                                            }else{
                                                                $query=mysqli_query($conn,"SELECT * FROM buku
                                                                                           JOIN kategori ON kategori.nama_kategori = buku.nama_kategori");
                                                            }
                                                            $no=1;
                                                            while($data=mysqli_fetch_array($query)){ ?>
                                                                    <tr>
                                                                        <td><?php echo $data['id_buku'];?></td>
                                                                        <td><?php echo $data['isbn'];?></td>
                                                                        <td><?php echo $data['nama_kategori'];?></td>
                                                                        <td><?php echo $data['judul'];?></td>
                                                                        <td><?php echo $data['nama_penulis'];?></td>
                                                                        <td><?php echo $data['nama_penerbit'];?></td>
                                                                        <td><?php echo $data['jumlah_buku'];?></td>
                                                                        <td><img src="uploads/<?php echo $data['foto_sampul'];?>" width=75px></td>
                                                                        <td><?php echo $data['lokasi'];?></td>
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

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>