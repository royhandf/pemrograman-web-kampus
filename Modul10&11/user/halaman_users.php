<?php 
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/page.css">
</head>
<body>
    <div class="box">
        <h2>Selamat Datang</h2>
        <ul>
            <li><a href="#" id="profile">Profile</a></li>
            <li><a href="barang.php" id="barang">Daftar Barang</a></li>
            <li><a href="pembelian.php" id="pembelian">Pembelian</a></li>
            <li><a href="../logout.php" id="logout">Logout</a></li>
        </ul>
    </div>
</body>
</html>