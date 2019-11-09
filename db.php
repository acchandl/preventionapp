<?php

//DB details

//$dbHost = '204.48.17.31:3306';
//$dbHost = 'localhost';
$dbHost='204.48.17.31:3306';

$dbUsername = 'ychyuxxjhw';

$dbPassword = 'enWfXTEN4Q';

$dbName = 'ychyuxxjhw';

//Create connection and select DB

$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if($db->connect_error){

   die("Unable to connect database: " . $db->connect_error);

}
?>
