<?php
    $dsn = 'mysql:host=eyw6324oty5fsovx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=sx8o31qj3imbsc4z';
    $username = 'vi07uqbw6iakj2kg';
    $password = 'vtim3w5bc6tpch8f'

    try {
        $db = new PDO($dsn, $username, $password);

    } catch (PDOException $e) {
        $error_msg = 'Database Error: ' ;
        $error_msg .= $e->getMessage();
        include('view/error.php');
        exit();
    }
?>