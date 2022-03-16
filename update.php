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
        header("Location: index.php #comments");
    } else {
        echo "Failed.";
    }
                