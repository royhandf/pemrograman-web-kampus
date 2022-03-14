<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>        
    <h3>Form Hitung Luas Persegi Panjang dengan PHP</h3>
    <h4>Isi Data</h4>
    <form method="POST">
        <table>
            <tr>
                <td>Panjang</td>
                <td><input type="text" name="panjang" required></td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td><input type="text" name="lebar" required></td>
            </tr>
            <tr><td></td>
                <td><button type="submit" name="submit">Hitung</button></td>
            </tr>
        </table>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            
            // menghitung luas segitiga
            $luas = $panjang * $lebar;
            echo "<br>";
            echo "Hasilnya: <br>";
            echo "Panjang = $panjang <br>";
            echo "Lebar = $lebar <br>";
            echo "Luas persegi panjang = $panjang x $lebar = $luas";
        }
    ?>
</body>
</html>