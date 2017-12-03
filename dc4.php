<?php
$mysqli = new mysqli("localhost", "root", "", "my_db");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//$query= "SELECT * FROM nextperson";

if ($mysqli->query("SELECT PersonID FROM nextperson") === TRUE) {
	if ($result = $mysqli->use_result()) {
            while ($row = $result->fetch_row()) {
                printf("%s\n", $row[0]);
            }
            $result->close();
	}
    }
else printf("not true");
$mysqli->close();
?> 