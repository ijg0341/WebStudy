<?php
    $conn = mysqli_connect('localhost','root','60109ijg','jingyubord');
    $sql = "UPDATE border SET
    title = '{$_POST['title']}',
    description = '{$_POST['description']}'
    WHERE id = '{$_POST['id']}'";
    $result = mysqli_query($conn, $sql);

    header("Location: content.php?id={$_POST['id']}");
?>