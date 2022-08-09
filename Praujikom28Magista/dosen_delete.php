<?php
//koneksi database

include 'koneksi.php';

// Menangkap data id yang dikirim dari url
$kd_dosen = $_GET['kd_dosen'];

//menghapus data dari database

mysqli_query($koneksi, "DELETE FROM tbl_dosen WHERE kd_dosen='$kd_dosen'");
//mengalihkan haalaman
header('location:dosen_list.php');
