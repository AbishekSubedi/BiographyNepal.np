<?php

    $host = "containers-us-west-29.railway.app:7241";
    $user = "root";
    $pass = "lXXj6kLXpvDjBdAIvxMp";
    $db = "railway";

    $conn = mysqli_connect($host, $user, $pass, $db);

    $sql = "CREATE TABLE comments_01( 
            ID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
            Name VARCHAR(255) NOT NULL,
            Comments VARCHAR(255) NOT NULL
            );";

    if ($conn -> query($sql)) {
        echo "Table Created.";
    } else {
        echo "Error";
    }  