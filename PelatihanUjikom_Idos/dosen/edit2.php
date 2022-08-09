<?php
include '../koneksi.php';

$kd_dosen=$_GET['kd_dosen'];
$dosenByID=$data->get_dosenById($kd_dosen)->fetch_assoc();

?>
<html>
<body>
	<h1>Edit Dosen</h1>
	
	<form action="#" method="post">
	<table>
		<tr>
			<td>Kode Dosen</td>
			<td>:</td>
			<td><input type="number" name="kd_dosen" value="<?php echo $dosenByID['kd_dosen']?>" disabled></td>
		</tr>
		<tr>
			<td>Nama Dosen</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $dosenByID['nama']?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" value="<?php echo $dosenByID['alamat']?>"></td>
		</tr>
		<tr>
			<td><button type="submit">Simpan</button></td>
		</tr>
		
	</table>
	</form>
	<?php
	
	if(isset($_POST['nama_dosen'])){
		$nama_dosen=$_POST['nama_dosen'];
		$alamat=$_POST['alamat'];
		
		if($data->update_dosen($kd_dosen,$nama_dosen,$alamat)){
			header('location:index.php');
		}
	}
	?>
</body>
</html>

