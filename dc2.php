<?php
$mysqli = new mysqli("localhost", "root", "", "my_db");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if ($mysqli->query("CREATE TABLE NextPerson
 (
 PersonID int,
 LastName varchar(255),
 FirstName varchar(255),
 Address varchar(255),
 City varchar(255)
 )") === TRUE) {
    printf("Table myCity successfully created.\n");
}

$mysqli->close();
?> 