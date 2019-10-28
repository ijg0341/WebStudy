<?php
    $conn = mysqli_connect('localhost','root','60109ijg','jingyubord');
    $sql = "DELETE FROM border WHERE id = {$_POST['id']}";
    $result = mysqli_query($conn, $sql);

    header("Location: index.php");
?>