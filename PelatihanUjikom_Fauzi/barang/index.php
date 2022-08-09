<?php
include '../koneksi.php';
session_start();
if ($_SESSION['status'] != 'login') {
    header('location :index.php');
}

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
                    <li> <a class="dropdown-item" href="../logout.php">Logout</a></li>
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
                    <h1 class="mt-4">Data Barang</h1>
                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                        Tambah Barang
                    </button>
                    <a href="index.php" class="btn btn-danger"> Refresh </a>
                    <br>
                    <br>
                    <div class="card mb-4">

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Satuan</th>
                                        <th>Harga Satuan</th>
                                        <th>Aksi</th>
                                    </tr>

                                </thead>

                                <tbody>
                                    <?php
                                    $i = 1;
                                    $data_barang = $data->get_barang();
                                    while ($record = $data_barang->fetch_array()) { ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $record['id_barang'] ?></td>
                                            <td><?php echo $record['namabarang'] ?></td>
                                            <td><?php echo $record['satuan'] ?></td>
                                            <td><?php echo "Rp. " . number_format($record['hargasatuan']) . ""; ?> </td>
                                            <td>
                                                <a class="btn btn-primary" href="edit.php?id_barang=<?php echo $record['id_barang'] ?>">Edit</a>
                                                <a class="btn btn-danger" onclick="return confirm('Anda Yakin Data Akan Dihapus ?');" href="hapus.php?id_barang=<?php echo $record['id_barang'] ?>">Hapus</a>
                                            </td>
                                        </tr>
                                        </tr>
                                        </tr>

                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form method="post">
                <!-- Modal body -->
                <div class="modal-body">
                    <input type="number" name="id_barang" placeholder="ID Barang" class="form-control" required>
                    <br>
                    <input type="text" name="namabarang" placeholder="Nama Barang" class="form-control" required>
                    <br>
                    <select class="form-select" name="satuan" aria-label="Default select example" required>

                        <option value="pcs">Pcs</option>
                        <option value="kg">Kg</option>
                        <option value="meter">Meter</option>
                    </select>
                    <br>
                    <input type="number" name="hargasatuan" placeholder=" Harga Satuan" class="form-control" required>
                    <br>
                    <button type="submit" class="btn btn-primary"> Tambah</button>
                    <br>
                    <br>
                    <div class="alert alert-warning">Harap Mengisi Data Yang Sesuai</div>
            </form>
            <?php

            if (isset($_POST['id_barang'])) {
                $id_barang = $_POST['id_barang'];
                $namabarang = $_POST['namabarang'];
                $satuan = $_POST['satuan'];
                $hargasatuan = $_POST['hargasatuan'];


                if ($data->add_barang($id_barang, $namabarang, $satuan, $hargasatuan)) {
                    echo "<script> alert('Berhasil Menyimpan Data') 
                    document.location.href = 'index.php' </script>";
                }
            }

            ?>

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

    </div>
</div>
</div>

</html>