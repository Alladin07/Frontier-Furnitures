<?php

$user = 'root';
$pass = 'root';
$database = 'Furniture_Store';

$database = new mysqli('localhost',$user,$pass,$database) or die('Unable to connect');

echo "Great Work!!!";

?>
