<?php
    // Maak contact met de mysql-server
    include("connect_db.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM `users` WHERE `id` = $id";

    mysqli_query($conn, $sql);

    header("Location: ./index.php?content=users");
?>