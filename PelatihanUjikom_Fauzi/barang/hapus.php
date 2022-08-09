<?php
include '../koneksi.php';

$id_barang = $_GET['id_barang'];

if ($data->delete_barang($id_barang)) {
    echo "<script> 
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
