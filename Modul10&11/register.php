<?php 
    require 'controller/function.php';

    if (isset($_POST["register"])) {
        if (account($_POST) > 0) {
            echo "<script>
                    alert('Akun berhasil registrasi');
                    document.location.href = 'index.php';
                </script>";
        } else {
            echo mysqli_error($koneksi);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="box">
        <h2>Silakan Registrasi</h2>
        <form action="" method="POST">
            <ul>
                <li>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </li>
                <li>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </li>
                <li>
                    <label for="password2">Confirm Password</label>
                    <input type="password" name="password2" id="password2">
                </li>
                <li>
                    <label for="level">Level</label>
                    <select name="level" id="level">
                        <option value="none" selected disabled></option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </li>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>