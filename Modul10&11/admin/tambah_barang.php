<?php 
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require '../function.php';

    // cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["tambah"])) {
        if(tambah_barang($_POST) > 0) {
            echo "
                <script> 
                    alert('Data berhasil ditambahkan!')
                    document.location.href = 'barang.php';
                </script>
            ";
        } else {
            echo "
                <script> 
                    alert('Data gagal ditambahkan!')
                    document.location.href = 'barang.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        li {
            list-style: none;
        }
        label {
            display: block;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h2>Tambah Barang</h2>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="stok">Stok Barang</label>
                <input type="number" name="stok" id="stok">
            </li>
            <li>
                <label for="harga">Harga Barang</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <button type="submit" name="tambah" style="margin: 10px 5px 0 0;">Tambah</button>
                <button type="submit" name="kembali"><a href="barang.php" style="text-decoration: none;">Kembali</a></button>
            </li>
        </ul>
    </form>
</body>
</html>