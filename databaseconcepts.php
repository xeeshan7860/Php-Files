<?php

$mysqli = new mysqli('localhost', 'root', '');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

/*if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}*/

echo 'Success... ' . "connect\n";

$sql = 'CREATE DATABASE my_db';
if ($mysqli->query($sql)) {
    echo "Database my_db created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";}
$mysqli->close();
?> 