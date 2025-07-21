<?php  

    // CONFIGURATION
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'lekk');

    $connexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$connexion) {
        die("Connection failed: " . mysqli_connect_error());
    }