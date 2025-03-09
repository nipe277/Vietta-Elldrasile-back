<?php

function getData($type, $connection){
    $sql = "SELECT * FROM $type";
    $result = $connection->query($sql);

    $posts = [];

    while($row = $result->fetch()){
        $posts[] = $row;
    }
    echo json_encode($posts, JSON_UNESCAPED_UNICODE);
}