<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Dosen</title>
</head>

<body>
    <h2> Form Tambah Data Dosen</h2>
    <form action="aksi_add_dosen.php" method="post">
        <table>
            <tr>
                <td><label for="kd_dosen"> Kode Dosen</label></td>
                <td>:</td>
                <td><input type="number" name="kd_dosen" placeholder="Masukkan Kode Dosen"></td>
            </tr>
            <tr>
                <td><label for="nm_dosen"> Nama Dosen</label></td>
                <td>:</td>
                <td><input type="text" name="nm_dosen" placeholder="Masukkan Nama Dosen"></td>
            </tr>
            <tr>
                <td><label for="alamat"> Alamat</label></td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="Masukkan Alamat"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="SIMPAN">
                    <input type="button" value="BATAL" onclick="window.location.href='dosen_list.php'">
                </td>
            </tr>
        </table>

    </form>
</body>

</html>