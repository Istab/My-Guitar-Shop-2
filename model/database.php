<?php
    $secrets = fopen("../.secrets", "r");
    $username = rtrim(fgets($secrets));
    $password = rtrim(fgets($secrets));
    $dsn = rtrim(fgets($secrets));

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
