<?php

    $host = "containers-us-west-29.railway.app:7241";
    $user = "root";
    $pass = "lXXj6kLXpvDjBdAIvxMp";
    $db = "railway";

    $conn = mysqli_connect($host, $user, $pass, $db);

    function setComments($sql) {
        $name = $_POST['name'];
        $comments = $_POST['comment'];

        $sql = "INSERT INTO comments_01 (Name, Comments)
                VALUES('$name', '$comments');";

        if ($conn -> query($sql)) {
            echo "Data Inserted";
            header("Location: index.php");
        } else {
            echo "Failed.";
        }
    }
    
    function getComments($conn) {
        $sql = "SELECT * FROM comments_01 WHERE Comments;";

        if ($conn -> query($sql)) {
            while ($row = $data -> fetch_assoc()) {
                echo $row['Names'] . "<br>";
                echo $row['Comments'] . "<br>";
            }
            header("Location: index.php");
            header("Location: #comments");
        } else {
            echo "Failed.";
        }
    }