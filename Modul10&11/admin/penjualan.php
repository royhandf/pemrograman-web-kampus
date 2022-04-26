<?php 
    session_start();

    if(!isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }

    require '../controller/function.php';

    $jual = query("SELECT x.nama, y.jumlah, y.tanggal_penjualan 
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
    <title>Penjualan</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <h2>Penjualan</h2>
    <a href="halaman_admin.php">[Kembali]</a>
    <table align="center">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Stok</th>
			<th>Tanggal</th>
		</tr>
        <?php $no = 1; ?>
        <?php foreach ($jual as $list) :  ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $list["nama"]; ?></td>
                <td><?= $list["jumlah"]; ?></td>
                <td><?= $list["tanggal_penjualan"]; ?></td>
            </tr>
        <?php endforeach; ?>
	</table>
</body>
</html>