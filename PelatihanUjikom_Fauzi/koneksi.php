<?php

class koneksi
{

	public $koneksi;

	function __construct()
	{
		$this->koneksi = mysqli_connect("localhost", "root", "", "db_ujikom27");
		if (mysqli_connect_errno()) {
			echo "koneksi gagal";
		}/*else {
           echo "koneksi berhasil";
       }*/
	}
	//data matkul
	function get_barang()
	{

		$data = $this->koneksi->query("select * from tbl_barang");
		return $data;
	}

	function add_barang($id_barang, $namabarang, $satuan, $hargasatuan)
	{
		$this->koneksi->query("insert into tbl_barang values('$id_barang','$namabarang','$satuan','$hargasatuan')");
		return true;
	}

	function get_barangById($id_barang)
	{
		$data = $this->koneksi->query("select * from tbl_barang where id_barang='$id_barang'");
		return $data;
	}

	function update_barang($id_barang, $namabarang, $satuan, $hargasatuan)
	{

		$this->koneksi->query("UPDATE tbl_barang set namabarang='$namabarang', satuan='$satuan', hargasatuan='$hargasatuan' where id_barang='$id_barang'");
		return true;
	}
	function delete_barang($id_barang)
	{
		$this->koneksi->query("delete from tbl_barang where id_barang='$id_barang'");
		return true;
	}
	function add_kasir($id_kasir, $username, $password, $namakasir, $alamat, $nomorhp, $nomorktp)
	{
		$this->koneksi->query("insert into tbl_kasir values('$id_kasir','$username','$password','$namakasir','$alamat','$nomorhp','$nomorktp')");
		return true;
	}


	function get_kasir()
	{

		$data = $this->koneksi->query("select * from tbl_kasir");
		return $data;
	}
	function get_kasirById($id_kasir)
	{
		$data = $this->koneksi->query("select * from tbl_kasir where id_kasir='$id_kasir'");
		return $data;
	}
	function update_kasir($id_kasir, $username, $password, $namakasir, $alamat, $nomorhp, $nomorktp)
	{

		$this->koneksi->query("UPDATE tbl_kasir set username='$username', namakasir='$namakasir', alamat='$alamat', nomorhp='$nomorhp', nomorktp='$nomorktp',password='$password' where id_kasir='$id_kasir'");
		return true;
	}

	function delete_kasir($id_kasir)
	{
		$this->koneksi->query("delete from tbl_kasir where id_kasir='$id_kasir'");
		return true;
	}

	function get_user($username, $password)
	{
		$data = $this->koneksi->query("select * from tbl_kasir where username='$username' and password='$password'");
		return $data;
	}


	//
}
$data = new koneksi();
