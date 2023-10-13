<?php

// creating database variables
$hn = "localhost";
$un = "dbconnect";
$pw = "WDK6QyG7kVm_*w!d";
$db = "students";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>