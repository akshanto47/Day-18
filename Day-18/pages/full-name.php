<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First php page</title>
</head>
<body>

<form action="action.php" method="POST">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name"/></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="last_name"/></td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td><input type="text" /></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="submit" name="btn"/></td>
        </tr>
    </table>

</form>
</body>
</html>