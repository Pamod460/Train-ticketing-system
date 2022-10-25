<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$database = "train_management_system";

//creating connection
$dbconn = new mysqli($servername,$username,$password,$database);

// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $dbconn->connect_error);
}

