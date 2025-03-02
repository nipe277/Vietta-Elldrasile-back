<?php
require_once("settingsDb.php");
try{
    $connection = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}