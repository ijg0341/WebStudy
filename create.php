<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    td {
        border: 1px solid black;
        font-size: 14px;
        padding-left: 15px;
        padding-right: 15px;
    }
    </style>
</head>
<body>
<form action="create_process.php" method="POST">
    <table>
        <tr>
            <td>제목</td><td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>내용</td><td><textarea name="description"cols="30" rows="10"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="작성">
</form>
</body>
</html>