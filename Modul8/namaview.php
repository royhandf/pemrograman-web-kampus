<?php 
    require "koneksi.php";

    $bukutamu = query("SELECT * FROM bukutamu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku Tamu</title>
</head>
<body>
    <h1>Daftar Buku Tamu</h1>

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ($bukutamu as $list) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $list["nama"]; ?></td>
                <td><?= $list["email"]; ?></td>
                <td><?= $list["komentar"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
