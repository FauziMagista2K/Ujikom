<?php

session_start();
// Untuk Memanggil Login
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data_login = $data->get_user($username, $password);
    if (mysqli_num_rows($data_login) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';


        header('location:index.php');
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

// Untuk menambahkan data Matkul
if (isset($_POST['kd_matkul'])) {
    $kd_matkul = $_POST['kd_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];

    if ($data->add_matkul($kd_matkul, $nama_matkul, $sks)) {

        header('location:index.php');
    }
}
// Untuk Mengedit Data Matkul
if (isset($_POST['nama_matkul'])) {
    //$kd_matkul;
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];

    if ($data->update_matkul($kd_matkul, $nama_matkul, $sks)) {
        header('location:index.php');
    }
}

// Menambah Data Dosen
if (isset($_POST['kd_dosen'])) {
    $kd_dosen = $_POST['kd_dosen'];
    $nama_dosen = $_POST['nama_dosen'];
    $alamat = $_POST['alamat'];

    if ($data->add_dosen($kd_dosen, $nama_dosen, $alamat)) {
        header('location:index.php');
    }
}
// Mengedit data jadwal
if (isset($_POST['nama_dosen'])) {
    $nama_dosen = $_POST['nama_dosen'];
    $nama_matkul = $_POST['nama_matkul'];
    $ruang = $_POST['ruang'];
    $waktu = $_POST['waktu'];

    if ($data->update_matkul($id, $nama_matkul, $ruang, $waktu)) {
        header('location:index.php');
    }
}

// Menambah data jadwal

if (isset($_POST['ruang'])) {
    $kd_dosen = $_POST['kd_dosen'];
    $kd_matkul = $_POST['kd_matkul'];
    $ruang = $_POST['ruang'];
    $waktu = $_POST['waktu'];

    if ($data->add_jadwal($kd_dosen, $kd_matkul, $ruang, $waktu)) {
        header('location:index.php');
    }
}
