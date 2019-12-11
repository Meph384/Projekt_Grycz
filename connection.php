<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'projekt';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

//Check connection
if ($conn->connect_error) {
    die("Connection failed ".$conn->connection_error);
}
?>