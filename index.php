<?php
header('Content-type: json/application');
header('Access-Control-Allow-Origin: http://localhost:5174');
require_once("DbConnection/connectionDb.php");
$sql = "SELECT * FROM plot";
$result = $connection->query($sql);

$posts = [];

while($row = $result->fetch()){
    $posts[] = $row;
}
echo json_encode($posts, JSON_UNESCAPED_UNICODE);


// header('Content-type: json/application');
