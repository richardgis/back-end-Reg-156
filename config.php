<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "*richard";
$dbname = "staff_db";

// create a connection to database
$conn = new mysqli($host, $user, $pass, $dbname);

// do a check for dbconnection.
if($conn->connect_error){
    die('Connection Failed!' . $conn->connect_error);
}
?>