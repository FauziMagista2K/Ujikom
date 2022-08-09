<?php
include '../koneksi.php';
session_start();
$kd_matkul = $_GET['kd_matkul'];
$matkulByID = $data->get_matkulById($kd_matkul)->fetch_assoc();

?>
<html>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="../assets/demo/chart-area-demo.js"></script>
    <script src="../assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Pelatihan Ujikom</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>


    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-primary" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i>
                            </div>
                            KEMBALI
                        </a>


                        <div class="sb-sidenav-footer">
                            <div class="small">Logged in as: <?php echo $_SESSION['username'] ?> </div>

                        </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">EDIT MATKUL</h1>
                    <ol class="breadcrumb mb-4">
                    </ol>
                    <form method="post">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" name="kd_matkul" value="<?php echo $matkulByID['kd_matkul'] ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama_matkul" value="<?php echo $matkulByID['nama'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">SKS</label>
                            <input type="text" class="form-control" name="sks" value="<?php echo $matkulByID['sks'] ?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"> Simpan</button>


                    </form>
                    <?php

                    if (isset($_POST['nama_matkul'])) {
                        //$kd_matkul;
                        $nama_matkul = $_POST['nama_matkul'];
                        $sks = $_POST['sks'];
                        if ($data->update_matkul($kd_matkul, $nama_matkul, $sks)) {
                            echo "<script>alert('Data Berhasil Di Tambahkan!')</script>";
                        }
                    }

                    ?>
                    <div class="card mb-4">

                        <div class="card-body">
                            <table id="datatablesSimple" class="">
                                <thead>
                                    <tr>
                                        <th class="table-primary">NO</th>
                                        <th class="table-primary">Kode Mata Kuliah</th>
                                        <th class="table-primary">Nama Mata Kuliah</th>
                                        <th class="table-primary">SKS</th>
                                        <th class="table-primary">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $data_matkul = $data->get_matkul();
                                    while ($record = $data_matkul->fetch_array()) { ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $record['kd_matkul'] ?></td>
                                            <td><?php echo $record['nama'] ?></td>
                                            <td><?php echo $record['sks'] ?></td>
                                            <td>
                                                <a href="edit.php?kd_matkul=
                                                <?php echo $record['kd_matkul'] ?>"><button type="submit" class="btn btn-primary"> PILIH</button>
                                                </a>

                                            </td>
                                        </tr>
                                        </tr>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                            </table>
                        </div>

</body>


</html>