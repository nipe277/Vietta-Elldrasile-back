<?php

function returnIds(){
    
}

$sql = "SELECT id
FROM plot
WHERE table_schema = '$database'";
$result = $connection->query($sql);

$tableNames = [];

while($row = $result->fetch()){
array_push($tableNames, $row);
}