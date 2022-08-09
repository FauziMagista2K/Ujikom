<?php
if (isset($_POST['kd_matkul'])) {
    $kd_matkul = $_POST['kd_matkul'];
    $nama_matkul = $_POST['nama_matkul'];
    $sks = $_POST['sks'];

    if ($data->add_matkul($kd_matkul, $nama_matkul, $sks)) {
        header('location:index.php');
    }
}

$i = 1;
$data_matkul = $data->get_matkul();
while ($record = $data_matkul->fetch_array()) { ?>
    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $record['kd_matkul'] ?></td>
        <td><?php echo $record['nama'] ?></td>
        <td><?php echo $record['sks'] ?></td>
        <td>
            <a href="edit.php?kd_matkul=<?php echo $record['kd_matkul'] ?>">Edit</a>
            <a href="hapus.php?kd_matkul=<?php echo $record['kd_matkul'] ?>">Hapus</a>
        </td>
    </tr>
    </tr>
    </tr>

<?php
}
?>