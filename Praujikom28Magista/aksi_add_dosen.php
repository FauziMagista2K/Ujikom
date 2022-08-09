<?php

include 'koneksi.php';

//Menangkap data yang dikirim dari form

$kd_dosen = $_POST['kd_dosen'];
$nm_dosen = $_POST['nm_dosen'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO tbl_dosen VALUES ('$kd_dosen','$nm_dosen','$alamat') ");
header('location:dosen_list.php');
