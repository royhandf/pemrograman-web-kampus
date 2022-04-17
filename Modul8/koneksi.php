<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi Database</title>
</head>
<body>
    <h1>Demo koneksi database MySQL</h1>
    <?php 
        $koneksi = mysqli_connect('localhost', 'root', '', 'db_akademik');
        if ($koneksi) {
            echo "Terhubung";
        } else {
            echo "Gagal";
        }
    ?>
</body>
</html>