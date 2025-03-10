<?php
function returnTableNames(string $database, PDO $connection):Array {
    $sql = "SELECT table_name
    FROM information_schema.tables
    WHERE table_schema = '$database'";
    $result = $connection->query($sql);

    $tableNames = [];

    while($row = $result->fetch()){
        array_push($tableNames, $row);
    }

    return $tableNames;
}


