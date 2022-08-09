<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen</title>
</head>

<body>
    <h2> Edit Dosen</h2>

    <?php
    include 'koneksi.php';
    $kd_dosen = $_GET['kd_dosen'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_dosen where kd_dosen =$kd_dosen");
    while ($data = mysqli_fetch_array($sql)) {
    ?>

        <form action="aksi_edit_dosen.php" method="post">
            <table>
                <tr>
                    <td><label for="kd_dosen">Kode Dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="kd_dosen" value="<?php echo $data['kd_dosen']; ?> "></td>
                </tr>
                <tr>
                    <td><label for="nm_dosen">Nama Dosen</label></td>
                    <td>:</td>
                    <td><input type="text" name="nm_dosen" value="<?php echo $data['nm_dosen']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>:</td>
                    <td><input name="alamat" id="alamat" value=" <?php echo $data['alamat']; ?>"> </input>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <input type="submit" value="SIMPAN">
                    <input type="button" value="BATAL" onclick="window.location.href='dosen_list.php'">
                </tr>
            </table>

        </form>
    <?php
    }
    ?>
</body>

</html>