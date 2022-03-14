<?php 
    if (isset($_POST["register"])) {
        header("Location: data_mahasiswa.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTM Mahasiswa</title>
</head>
<body>
    <h1>Pembuatan KTM Mahasiswa</h1>
    <form action="data_mahasiswa.php" method="POST">
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input type="text" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td><label for="tempat-lahir">Tempat Lahir</label></td>
                <td><input type="text" name="tempat-lahir" id="tempat-lahir"></td>
            </tr>
            <tr>
                <td><label for="tanggal-lahir">Tanggal Lahir</label></td>
                <td><input type="date" name="tanggal-lahir" id="tanggal-lahir"></td>
            </tr>
            <tr>
                <td><label for="fakultas">Fakultas</label></td>
                <td>
                    <select name="fakultas" id="fakultas">
                        <option value="" disabled selected>--- Pilih Fakultas ---</option>
                        <option value="Ilmu Tarbiyah dan Keguruan">Ilmu Tarbiyah dan Keguruan</option>
                        <option value="Syariah">Syariah</option>
                        <option value="Humaniora">Humaniora</option>
                        <option value="Psikologi">Psikologi</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Sains dan Teknologi">Sains dan Teknologi</option>
                        <option value="Kedokteran dan Ilmu Kesehatan">Kedokteran dan Ilmu Kesehatan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>
                    <select name="jurusan" id="jurusan">
                        <option value="" disabled selected>--- Pilih Jurusan ---</option>
                        <option value="Matematika">Matematika</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit" name="register" style="cursor: pointer;">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>