<?php
$mysqli = new mysqli("localhost", "root", "", "my_db");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query1="UPDATE nextperson
 SET PersonID='839' WHERE LastName='Dildar'";

if ($mysqli->query($query1) === TRUE) {
    printf("Successfully done.\n");
}

$mysqli->close();
?> 