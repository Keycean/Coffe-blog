<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "imnotadev"; 
// create connection
// Establish connection
$db = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}
