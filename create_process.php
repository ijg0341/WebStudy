<?php
    $conn = mysqli_connect('localhost','root','60109ijg','jingyubord');
    $sql = "INSERT INTO border(
        title, description, author_id, created, likes
    ) VALUES (
        '{$_POST['title']}','{$_POST['description']}','1',NOW(), '0'
    )";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM border WHERE title = '{$_POST['title']}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    header("Location: content.php?id={$row['id']}");
?>