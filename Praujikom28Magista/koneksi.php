<?php
class koneksi
{
    public function get_koneksi()
    {
        $conn = mysqli_connect("localhost", "root", "", "pelatihan_ujikom_magista");

        if (mysqli_connect_errno()) {
            echo "Koneksi ke database gagal :" . mysqli_connect_error();
        }
        return $conn;
    }
}

$konek = new koneksi();
$koneksi = $konek->get_koneksi();
