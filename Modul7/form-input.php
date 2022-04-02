<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>

<body>
    <?php 
        if(isset($_POST["simpan"])) {
            $identitas = [
                [
                    "nama" => $_POST["nama"],
                    "alamat" => $_POST["alamat"],
                    "email" => $_POST["email"],
                    "gender" => $_POST["gender"],
                    "jawab" => $_POST["jawab"]
                ]
            ];
        }

        $angka1 = 5;
        $angka2 = 2;
        $hasil = (string) ($angka1 + $angka2);
    ?>

    <h2>FORM INPUT DATA</h2>
    <form method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" cols="20" rows="2" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="gender" value="Cowok">Cowok
                    <input type="radio" name="gender" value="Cewek">Cewek
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Hitung</td>
                <td>:</td>
                <td><?= $angka1 ?> + <?= $angka2 ?></td>
            </tr>
            <tr>
                <td>Jawab</td>
                <td>:</td>
                <td><input type="text" name="jawab" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" name="simpan">Simpan</button>
                    <button type="reset" name="batal">Batal</button>
                </td>
            </tr>
        </table>
    </form>
    <br><br>

    <table border="1">
        <?php if(isset($_POST["simpan"])) : ?>
        <?php if($_POST["jawab"] == $hasil) { ?>
        <tr align="center">
            <td>Nama</td>
            <td>Alamat</td>
            <td>Email</td>
            <td>Jenis Kelamin</td>
            <td>Jawaban</td>
        </tr>
        <tr>
            <?php foreach ($identitas as $newIdentitas) : ?>
            <td><?= $newIdentitas["nama"]; ?></td>
            <td><?= $newIdentitas["alamat"]; ?></td>
            <td><?= $newIdentitas["email"]; ?></td>
            <td><?= $newIdentitas["gender"]; ?></td>
            <td><?= $newIdentitas["jawab"]; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php } else { ?>
        <p>Maaf Jawaban Anda Salah</p>
        <a href="form-input.php">Ulangi</a>
        <?php } ?>
        <?php endif; ?>
    </table>
</body>

</html>