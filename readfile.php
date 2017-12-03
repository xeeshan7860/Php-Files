<?php
$section=file_get_contents("test wp.txt", NULL, NULL, 0, 100);//change name of file to be read
var_dump($section);
?>