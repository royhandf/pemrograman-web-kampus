<?php 
    require "function.php";

    $jadwal_matkul = query("SELECT x.nama_matakuliah, y.jam, y.hari, y.ruang 
                            FROM matakuliah x 
                            INNER JOIN jadwal y 
                            ON x.id_matakuliah = y.id_matkul
                        ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
</head>
<body>
    <h1>Mata Kuliah</h1>

    <a href="tambah.php" style="text-decoration: none;">[Tambah Data]</a>
    <br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Mata Kuliah</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Ruangan</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($jadwal_matkul as $list) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $list["nama_matakuliah"];?></td>
                <td><?= $list["jam"]; ?></td>
                <td><?= $list["hari"]; ?></td>
                <td><?= $list["ruang"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
