<?php 
    $student = [
        [
            "nama" => "M. Royhan Daffa",
            "nim" => "200605110104",
            "gender" => "Laki-laki",
            "ttl" => "Jember, 14 Sep 2001",
            "agama" => "Islam",
            "alamat" => "Perum. Karya Bhakti P-13 Kota Pasuruan",
            "hobi" => "Bermain game",
            "profil" => "image/profil.webp"
        ], 
        [
            "nama" => "Jauhar Fuadi", 
            "gender" => "Laki-laki",
            "ttl" => "Pasuruan, 21 November 2001",
            "agama" => "Islam",
            "alamat" => "Jl. Bukir No.2 Kota Pasuruan",
            "hobi" => "Olahraga",
            "profil" => "https://www.listchallenges.com/f/items/d65221ad-0b86-464e-a568-b89892fff009.jpg"
            // "tugas" => [90, 80, 100]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach($student as $students) : ?>
        <ol>
            <li>
                <a href="biodata.php"><?= $students['nama']; ?></a>
            </li>
        </ol>
    <?php endforeach; ?>
</body>
</html>