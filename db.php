<?php
    $host = "containers-us-west-5.railway.app:6538";
    $user = "root";
    $pass = "jXuI47qnzOFRPaj83JGo";
    $db = "railway";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn) {
        echo "Connected";
    } else {
        echo "Connection Error";
    }
?>    