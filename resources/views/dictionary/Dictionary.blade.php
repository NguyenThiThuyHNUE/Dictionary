<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    @csrf
    <table>
        <tr>
            <td>Nhập từ cần tra: </td>
            <td><input type="text" name="words"> </td>
            <td><button type="submit">Dịch</button></td>
        </tr>
    </table>

</form>
</body>
</html>
