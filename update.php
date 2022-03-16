<?php

    $host = "containers-us-west-29.railway.app:7241";
    $user = "root";
    $pass = "lXXj6kLXpvDjBdAIvxMp";
    $db = "railway";

    $conn = mysqli_connect($host, $user, $pass, $db);

    $name = $_POST['name'];
    $comments = $_POST['comment'];

    $sql = "INSERT INTO tbl_01(Name, Comments)
            VALUES('$name', '$comments');";

    if ($conn -> query($sql)) {
        echo "Data Inserted";
        header("Location: index.php");
    } else {
        echo "Failed.";
    }
     
    $sql2 = "SELECT *FROM tbl_01 WHERE Comments;";

    if ($conn -> query($sql2)) {
        while ($row = $data -> fetch_assoc()) {
            echo $row['Comments'] . "<br>";
        }
        header("Location: index.php");
    } else {
        echo "Failed.";
    }