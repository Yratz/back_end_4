<?php
    $info = $_GET['info'];
    $name= $_GET['name'];
    $mysqli = new mysqli("mysql", "user", "sayhi", "appDB2");
    $result = $mysqli->query("INSERT INTO achivments VALUE (NULL, '$name', '$info')");
    header("Location: http://localhost:8080/index.php");
    exit();
?>