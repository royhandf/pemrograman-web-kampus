<?php 
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require '../function.php';

    $beli = query("SELECT x.nama, y.jumlah, y.tanggal_penjualan 
                    FROM barang x 
                    INNER JOIN penjualan y 
                    ON x.id_barang = y.id_barang
                ");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <h2>Pembelian</h2>
    <a href="halaman_users.php">[Kembali]</a>
    <a href="beli_barang.php">[Beli]</a>
    <table align="center">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Stok</th>
			<th>Tanggal</th>
		</tr>
        <?php $no = 1; ?>
        <?php foreach ($beli as $list) :  ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $list["nama"]; ?></td>
                <td><?= $list["jumlah"]; ?></td>
                <td><?= date("Y-m-d"); ?></td>
            </tr>
        <?php endforeach; ?>
	</table>
</body>
</html>