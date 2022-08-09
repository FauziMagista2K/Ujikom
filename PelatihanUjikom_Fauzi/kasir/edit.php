<?php
include '../koneksi.php';
session_start();
if ($_SESSION['status'] != 'login') {
    header('location:index.php');
}
$id_kasir = $_GET['id_kasir'];
$kasirByID = $data->get_kasirById($id_kasir)->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3">UjiKom 28 Magista</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">


            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li> <a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <br>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Pengelolaan Kasir</div>

                        <a class="nav-link" href="../kasir">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Data Kasir
                        </a>
                        <div class="sb-sidenav-menu-heading">Pengelolaan Barang</div>

                        <a class="nav-link" href="../barang">
                            <div class="sb-nav-link-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            Data Barang
                        </a>

                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as: <?php echo $_SESSION['username'] ?> </div>
                        </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Mata Kuliah</h1>
                    <br>
                    <br>
                    <div class="card mb-4">
                        <form action="#" method="post">

                            <form>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">ID Kasir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="id_kasir" value="<?php echo $kasirByID['id_kasir'] ?>" disabled>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="<?php echo $kasirByID['username'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="password" value="<?php echo $kasirByID['password'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama Kasir</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namakasir" value="<?php echo $kasirByID['namakasir'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="alamat" value="<?php echo $kasirByID['alamat'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor HP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="nomorhp" value="<?php echo $kasirByID['nomorhp'] ?>">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nomor KTP</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="nomorktp" value="<?php echo $kasirByID['nomorktp'] ?>">
                                        <br>

                                        <button type="submit" class="btn btn-primary"> Simpan</button>
                                        <a href="index.php" class="btn btn-danger"> Kembali</a>
                                        <br>
                                        <br>
                                    </div>
                                    <br>

                                </div>

                            </form>

                        </form>
                        <?php

                        if (isset($_POST['username'])) {
                            //$id_barang;
                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $namakasir = $_POST['namakasir'];
                            $alamat = $_POST['alamat'];
                            $nomorhp = $_POST['nomorhp'];
                            $nomorktp = $_POST['nomorktp'];

                            if ($data->update_kasir($id_kasir, $username, $password, $namakasir, $alamat, $nomorhp, $nomorktp)) {
                                echo "<script> alert('Berhasil Mengubah Data') 
                                document.location.href = 'index.php' </script>";
                            }
                        }

                        ?>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto " id="footer">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <font fice="Palace Script MT" Font color="#7FFF00"> Copyright 2022 &copy; Fauzi Magista All Rights Reserved.
                            <a target="_blank" rel="nofollow" href="http://instagram.com/fmagista"> Published by Magista2K</a>
                        </font>

                    </div>
                </div>
        </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>