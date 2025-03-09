<?php
header('Content-type: json/application');
// header('Access-Control-Allow-Origin: https://vanyafront/');
require_once("DbConnection/connectionDb.php");
require_once("getData.php");

if(isset($_GET['q'])){
    $type = $_GET['q'];
}
else{
    print "No type specified";
}

getData($type, $connection);





// header('Content-type: json/application');
