<?php
    $conn = mysqli_connect('localhost','root','60109ijg','jingyubord');
    $sql = "SELECT * FROM border ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
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
        <?php
            while($row = mysqli_fetch_array($result)){
                echo  "<tr>
                <td>{$row['id']}</td>
                <td><a href='content.php?id={$row['id']}'>{$row['title']}</a></td>
                <td>{$row['author_id']}</td>
                <td>{$row['likes']}</td>
                <td>{$row['created']}</td>
            </tr>";
            }
        ?>
    </table>
    <form>
        <input type="text" name="search">
        <select name="condition">
            <option value="title">제목</option>
            <option value="author">작성자</option>
            <option value="description">내용</option>
            <option value="content">제목+내용</option>
        </select>
        <input type="submit" value="검색">
    </form>
    <input type="button" value="글쓰기" onClick="location.href='create.php'">
</body>
</html>