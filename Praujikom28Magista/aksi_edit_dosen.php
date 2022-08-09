<?php

//Koneksi database

include 'koneksi.php';

// Mengisi untuk update
$kd_dosen = $_POST['kd_dosen'];
$nm_dosen = $_POST['nm_dosen'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE tbl_dosen set kd_dosen='$kd_dosen', nm_dosen='$nm_dosen', alamat='$alamat' where kd_dosen='$kd_dosen'");
header('location:dosen_list.php');
