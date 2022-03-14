<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="5" style="text-align: center;">
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>TTL</td>
            <td>Fakultas</td>
            <td>Jurusan</td>
        </tr>
        <tr>
            <td><?= $_POST["nama"]; ?></td>
            <td><?= $_POST["nim"]; ?></td>
            <td><?= $_POST["tempat-lahir"] . ", " . $_POST["tanggal-lahir"]; ?></td>
            <td><?= $_POST["fakultas"]; ?></td>
            <td><?= $_POST["jurusan"]; ?></td>
        </tr>
    </table>
</body>
</html>