<?php
include '../koneksi.php';

$id_kasir = $_GET['id_kasir'];

if ($data->delete_kasir($id_kasir)) {
    echo "<script>
    alert('Data Berhasil Di Hapus');
    document.location.href ='index.php';
      </script>";
}
