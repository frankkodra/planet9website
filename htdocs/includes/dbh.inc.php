<?php

$host = 'localhost';
$dbname = 'users';
$dbusername = 'root';
$dbpass = '';
$dsn = "mysql:host=$host;dbname=$dbname;";
try {
     $conn = new PDO($dsn, $dbusername, $dbpass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $conn->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
}   
catch (Exception $e) {
    echo "connection failed". $e->getMessage();
}
