<?php
    
    require __DIR__.'../../../global.php';

    // Database configuration
    $dbHost     = getenv('DB_HOST'); 
    $dbUsername = getenv('DB_USER'); 
    $dbPassword = getenv('DB_PASS'); 
    $dbName     = getenv('DB_NAME'); 
    
    // Create database connection 
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
    mysqli_set_charset($conn, "utf8");

    // Check connection 
    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error);
    }


?>