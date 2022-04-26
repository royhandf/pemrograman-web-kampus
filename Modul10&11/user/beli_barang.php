<?php 
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require "../controller/function.php";
    
    $barang = query("SELECT * FROM barang");

    // cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["beli"])) {
        if(penjualan($_POST) > 0) {
            echo "
                <script> 
                    alert('Data berhasil dibeli!')
                    document.location.href = 'pembelian.php';
                </script>
            ";
        } else {
            echo "
                <script> 
                    alert('Data gagal dibeli!')
                    document.location.href = 'pembelian.php';
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
    <title>Pembelian</title>
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
    <h2>Pembelian Barang</h2>
    <form action="" method="POST">
        <ul>
            <li>
            </li>
            <li>
                <label for="list_barang">Nama Barang</label>
                <select name="list_barang" id="list_barang">
                    <?php foreach($barang as $list) : ?>
                        <option value="<?=$list["id_barang"] . "." . $list["nama"] ?>">
                            <?= $list["nama"] ?> (Rp. <?= $list["harga"]; ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </li>
            <li>
                <label for="stok">Stok Barang</label>
                <input type="number" name="stok" id="stok">
            </li>
            <li>
                <button type="submit" name="beli" style="margin: 10px 5px 0 0;">Tambah</button>
                <button type="submit" name="kembali"><a href="pembelian.php" style="text-decoration: none;">Kembali</a></button>
            </li>
        </ul>
    </form>
</body>
</html>