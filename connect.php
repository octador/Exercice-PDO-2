<?php
try {
    $dsn = 'mysql:host=localhost;dbname=hospitale2n';
    $user = 'root';
    $password = '';

    $db = new PDO($dsn, $user, $password);
} catch (Exception $message) {
    echo ' erreur connexion ' . $message;
}

?>