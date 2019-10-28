<?php
    $conn = mysqli_connect('localhost','root','60109ijg','jingyubord');
    $sql = "SELECT * FROM border WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
?>
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
<form action="update_process.php" method="POST">
    <input type="hidden" name="id" value="<?=$_POST['id']?>">
    <table>
        <tr>
            <td>제목</td><td><input type="text" name="title" value="<?=$row['title'];?>"></td>
        </tr>
        <tr>
            <td>내용</td><td><textarea name="description"cols="30" rows="10"><?=$row['description'];?></textarea></td>
        </tr>
    </table>
    <input type="submit" value="작성">
</form>
</body>
</html>