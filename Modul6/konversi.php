<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Tipe Data</title>
</head>
<body>
    <?php 
        $a = 300.4;
        echo "<br>"; 
        echo "tipe double: ", doubleval($a), "<br>";
        echo "tipe integer: ", intval($a), "<br>";
        echo "tipe string: ", strval($a);
    ?>
</body>
</html>