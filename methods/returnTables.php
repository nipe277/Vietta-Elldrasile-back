<?php
require_once("DbConnection/connectionDb.php");

$sql = "SELECT table_name
    FROM information_schema.tables
    WHERE table_schema = '$database'";
$result = $connection->query($sql);

$tableNames = [];

while($row = $result->fetch()){
    array_push($tableNames, $row);
}

