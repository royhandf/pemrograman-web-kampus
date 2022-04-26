<?php 
    session_start();

    require 'connection/connection.php';

    if(isset($_POST["register"])) {
        header("location: register.php");
        exit;
    }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
        
        // cek username
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            
            // cek password dan cek level account
            if (password_verify($password, $data["password"])) {
                $_SESSION["login"] = true;

                if ($data["level"] == "admin") {
                    $_SESSION["username"] = $username;
                    $_SESSION["level"] = "admin";
                    
                    header("location: admin/halaman_admin.php");
                    exit;
                } else {
                    $_SESSION["username"] = $username;
                    $_SESSION["level"] = "user";
                    
                    header("location: user/halaman_users.php");
                    exit;
                }
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        p {
            font-size: 15px;
            text-align: center;
            margin: 2rem 0 1rem;
        }
    </style>
</head>
<body>
    <div class="box">
        <?php if (isset($error)) {
            echo "<script>
                    alert('Username atau password salah!');
                </script>";
        } ?>

        <h2>Silakan Login</h2>
        <form action="" method="post">
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
                    <button type="submit" name="login">Login</button>
                </li>
                <li>
                    <p>Belum punya akun? silakan daftar dahulu</p>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>