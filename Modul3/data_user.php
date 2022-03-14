<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Login</title>
    </head>
    <body>
        <table border="1" cellpadding="5">
            <tr>
                <td>Username</td>
                <td>Password</td>
            </tr>
            <tr>
                <td><?= $_POST["username"]; ?></td>
                <td><?= $_POST["password"]; ?></td>
            </tr>
        </table>
    </body>
    </html>
</body>
</html>