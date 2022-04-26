<?php 
    session_start();
    
    if(!isset($_SESSION["login"])) {
        header("Location: ../login.php");
        exit;
    }

    require "../controller/function.php";

    $barang = query("SELECT * FROM barang");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
    <h2>Daftar Barang</h2>
    <a href="halaman_users.php">[Kembali]</a>
    <table align="center">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Stok</th>
			<th>Harga</th>
		</tr>
        <?php $no = 1; ?>
        <?php foreach ($barang as $list) :  ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $list["nama"]; ?></td>
                <td><?= $list["jumlah"]; ?></td>
                <td><?= $list["harga"]; ?></td>
            </tr>
        <?php endforeach; ?>
	</table>	
</body>
</html>