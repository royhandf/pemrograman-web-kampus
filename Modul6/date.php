<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal</title>
</head>
<body>
    <?php 
        echo date("m-F-Y, g:i:s A");
        echo "<br>";

        // Today
        echo date("l, d-M-Y");
        echo "<br> ";

        // // Time
        // UNIX timestamp / EPOCH Time
        echo "<br>Detik<br>";
        echo time();
        echo "<br>";

        // Tanggal 100 hari lagi
        echo "<br>100 hari lagi adalah: <br>";
        echo date("l, d M Y", time() + 60 * 60 * 24 * 100);
        echo "<br>";
        
        // mktime (membuat detik sendiri)
        // mktime (jam, menit, detik, bulan, tanggal, tahun)
        echo "<br>Hari Lahir<br>";
        echo date("l", mktime(0,0,0,9,14,2001));
    ?>
</body>
</html>