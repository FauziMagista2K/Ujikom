<?php

$no = mysqli_query($koneksi, "SELECT id_barang FROM tbl_barang ORDER BY id_barang DESC");
$result = mysqli_query($koneksi, "SELECT * FROM tbl_barang ") or die(mysqli_error($koneksi));;

$kd_barang = mysqli_fetch_array($no);
$kode = $kd_barang['id_barang'];

// BRG001
// 012345
$urut = substr($kode, 3, 3);
$tambah = (int) $urut + 1;
if (strlen($tambah) == 1) {
    $format = "BRG" . "00" . $tambah;
} else if (strlen($tambah) == 2) {
    $format = "BRG" . "0" . $tambah;
} else {
    $format = "BRG" . $tambah;
}
