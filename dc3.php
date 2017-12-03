<?php
$mysqli = new mysqli("localhost", "root", "", "my_db");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query1="INSERT INTO nextperson
 (
 PersonID,
 LastName,
 FirstName,
 Address,
 City
 ) VALUES ('286', 'Ahmed', 'Wassan', 'STEEL TOWN', 'KARACHI')";

$query2="INSERT INTO nextperson
 (
 PersonID,
 LastName,
 FirstName,
 Address,
 City
 ) VALUES ('287', 'AHMED', 'SHAHZAD', 'UNIVERSITY RD', 'KARACHI')";

$query3="INSERT INTO nextperson
 (
 PersonID,
 LastName,
 FirstName,
 Address,
 City
 ) VALUES ('288', 'SHAIKH', 'IRFAN', 'UNIVERSITY RD', 'KARACHI')";

$query4="INSERT INTO nextperson
 (
 PersonID,
 LastName,
 FirstName,
 Address,
 City
 ) VALUES ('289', 'Dildar', 'Ali', 'UNIVERSITY RD', 'KARACHI')";

if ($mysqli->query($query1) === TRUE) {
    printf("Successfully done.\n");
}

if ($mysqli->query($query2) === TRUE) {
    printf("Successfully done.\n");
}

if ($mysqli->query($query3) === TRUE) {
    printf("Successfully done.\n");
}

if ($mysqli->query($query4) === TRUE) {
    printf("Successfully done.\n");
}

$mysqli->close();
?> 