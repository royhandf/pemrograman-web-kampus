

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="function.php" method="POST">
    <table>
        <tr>
            <td>Nama :</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="text" name="email" required></td>
        </tr>
        <tr>
            <td>Komentar :</td>
            <td><textarea name="komentar" id="komentar" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" name="save" value="Save"></td>
            <td><input type="reset" name="cancel" value="Cancel"></td>
        </tr>
    </table>
    </form>
</body>
</html>