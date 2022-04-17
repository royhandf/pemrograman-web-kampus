<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">Tambah</a>
    <table border="1">
        <tr>
            <thead>
                <td>No.</td>
                <th>Nama Mata Kuliah</th>
            </thead>
        </tr>
        <tbody>
            <?php 
                $no = 1;
                include "koneksi.php";
                $lihatData = "SELECT * FROM bukutamu";
                $result = $koneksi -> query($lihatData);
                while ($cekData = $result -> fetch_array()):
            ?>
            <tr>
                <th><?= $no++; ?></th>
                <th><?= $cekData['nama']; ?></th>
                <th><?= $cekData['email']; ?></th>
                <th><?= $cekData['komentar']; ?></th>
            </tr>
            <?php endwhile; ?>
        </tbody>    
    </table>
</body>
</html>