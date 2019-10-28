<?php
    $conn = mysqli_connect('localhost','root','60109ijg','jingyubord');
    $sql = "SELECT * FROM border WHERE id = {$_GET['id']}";
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
    <table>
        <tr>
            <td>No.</td><td>제목</td><td>글쓴이</td><td>추천수</td><td>날짜</td>
        </tr>
        <tr>
            <td><?=$row['id'];?></td>
            <td><?=$row['title'];?></td>
            <td><?=$row['author_id'];?></td>
            <td><?=$row['likes'];?></td>
            <td><?=$row['created'];?></td>
        </tr>
        <tr><td><?=$row['description'];?></td></tr>
    </table>
    <form id="delete" action="delete_process.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="삭제">
    </form>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="submit" value="수정">
    </form>
</body>
</html>