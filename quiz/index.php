<?php 
    require 'function.php';
    
    if(isset($_POST["hitung"])) {
        if (tambah($_POST) === true) {
            exit;
        } 
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Sederhana</title>
</head>
<body>
    <h2>Quiz Praktikum Web</h2>
    <a href="riwayat.php" style="text-decoration: none;">[Riwayat Hitung]</a>
    <br><br>
    <form action="" method="POST">
        <div>
            <label for="nilai1">Nilai1 : </label>
            <input type="text" name="nilai1">
        </div>
        <br>
        <div>
            <label for="nilai2">Nilai2 : </label>
            <input type="text" name="nilai2">
        </div>
        <br>
        <div>
            <button type="submit" name="hitung">Hitung</button>
            <button type="reset" name="reset">Reset</button>
        </div>
    </form>
</body>
</html>