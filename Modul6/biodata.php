<?php 
    $student = [
        [
            "nama" => "M. Royhan Daffa",
            "nim" => "200605110104",
            "gender" => "Laki-laki",
            "ttl" => "Jember, 14 Sep 2001",
            "agama" => "Islam",
            "alamat" => "Perum. Karya Bhakti P-13 Kota Pasuruan",
            "hobi" => "Bermain game dan Olahraga",
            "profil" => "image/profil.webp"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Biodata</h1>     
    <?php foreach ($student as $students) : ?>
        <table>
            <img src="<?= $students["profil"];?>" alt="profil" width="100px">
            <tr>
                <td>Nama</td>
                <td><?= $students["nama"]; ?></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><?= $students["nim"]; ?></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td><?= $students["ttl"]; ?></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><?= $students["gender"]; ?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><?= $students["agama"]; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?= $students["alamat"]; ?></td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td><?= $students["hobi"]; ?></td>
            </tr>
        </table>
        
    <?php endforeach; ?>

</body>
</html>