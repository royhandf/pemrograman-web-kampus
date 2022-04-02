<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
    div {
        margin-bottom: 10px;
    }
    </style>
</head>

<body>
    <?php 
        if(isset($_POST['hitung'])){
            $value1 = $_POST['value1'];
            $value2 = $_POST['value2'];
            $operator = $_POST['operator'];
            switch ($operator) {
                case 'tambah':
                    $hasil = $value1 + $value2;
                    break;
                case 'kurang':
                    $hasil = $value1 - $value2;
                    break;
                case 'kali':
                    $hasil = $value1 * $value2;
                    break;
                case 'bagi':
                    $hasil = $value1 / $value2;
                    break;
                case 'modulus':
                    $hasil = $value1 % $value2;
                    break;
                default:
                    break;
            }
        }
    ?>

    <h2>Form Hitung</h2>
    <form method="POST">
        <div>
            <label for="value1">Value 1</label>
            <input type="text" name="value1" required>
        </div>
        <div>
            <label for="">Value 2</label>
            <input type="text" name="value2" required>
        </div>
        <div>
            <label for="operator">Operator</label>
            <select name="operator" id="operator">
                    <option value="tambah">+</option>
                    <option value="kurang">-</option>
                    <option value="kali">x</option>
                    <option value="bagi">/</option>
                    <option value="modulus">%</option>
            </select>
        </div>
        <div>
            <button type="submit" name="hitung">Hitung</button> 
            <button type="reset" name="reset" onclick="resetHasil()">Reset</button>
        </div>
        <div id="hasil">
            <?php if (isset($_POST['hitung'])) : ?>
                <p>Hasil Operator <?= $operator ?> adalah <?= $hasil ?></p>
            <?php endif; ?>
        </div>
    </form>

    <script>
        function resetHasil() {
            let hasil = document.getElementById('hasil');
            if (hasil.style.display === "none") {
                hasil.style.display = "block";
            } else {
                hasil.style.display = "none";
            }
        }
    </script>
</body>

</html>