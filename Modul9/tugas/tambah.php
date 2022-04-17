<?php 
    require 'function.php';

    // cek apakah tombol submit sudah ditekan atau belum
    if (isset($_POST["simpan"])) {
        if(tambah($_POST) > 0) {
            echo "
                <script> 
                    alert('Data berhasil ditambahkan!')
                    document.location.href = 'matakuliah.php';
                </script>
            ";
        } else {
            echo "
                <script> 
                    alert('Data gagal ditambahkan!')
                    document.location.href = 'matakuliah.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="hari">Hari</label></td>
                <td>:</td>
                <td>
                    <select name="hari" id="hari">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="jam">Jam</label></td>
                <td>:</td>
                <td><input type="text" name="jam"></td>
            </tr>
            <tr>
                <td><label for="ruang">Ruang</label></td>
                <td>:</td>
                <td><input type="text" name="ruang"></td>
            </tr>
            <tr>
                <td><label for="matkul">Mata Kuliah</label></td>
                <td>:</td>
                <td>
                    <select name="matkul" id="matkul">
                        <option value="Praktikum Pemrograman Web">Praktikum Pemrograman Web</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Praktikum Rekayasa Perangkat Lunak">Praktikum Rekayasa Perangkat Lunak</option>
                        <option value="Bahasa Inggris II">Bahasa Inggris II</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Praktikum Jaringan Komputer">Praktikum Jaringan Komputer</option>
                        <option value="Praktikum Grafika Komputer">Praktikum Grafika Komputer</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Pemrograman Web">Pemrograman Web	</option>
                        <option value="Computer Graphic">Computer Graphic</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <button type="submit" name="simpan">Simpan</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>