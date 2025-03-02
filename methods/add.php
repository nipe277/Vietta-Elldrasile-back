<?php

use PhpMyAdmin\Header;

require_once("../DbConnection/connectionDb.php");

$header = $_POST['header'];
$text = $_POST['text'];
$table = $_POST['tableNames'];

$query = "INSERT INTO $table (Header, Text) VALUES (:header, :text)";

$params = [
    ":header"=> $header,
    ":text"=> $text
];

try{
    $stmt = $connection->prepare($query);
    $affectedRows = $stmt->execute($params);
    header("Location: /");
}
catch (PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}

?>