<?php 
    if (isset($_POST["submit"])) {
        header("Location: data_user.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="data_user.php" method="post">
        <table>
            <tr>
                <td><label for="username">Username: </label></td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password: </label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit" style="cursor: pointer;">Login</button></td>
            </tr>
        </table>
    </form>
</body>

</html>