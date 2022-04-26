<?php 
    require "function.php";

    $perhitungan = query("SELECT nilai, hasil FROM hitung");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Perhitungan</title>
</head>
<body>
    <h2>Riwayat Perhitungan</h2>
    <a href="index.php" style="text-decoration: none;">[Hitung Ulang]</a>
    <br><br>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Nilai Awal</th>
            <th>Hasil</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($perhitungan as $hitung) : ?>
            <tr align="center">
                <td><?= $no++; ?></td>
                <td><?= $hitung["nilai"];?></td>
                <td><?= $hitung["hasil"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
