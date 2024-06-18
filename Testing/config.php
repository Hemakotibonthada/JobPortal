<?php
$servername = "localhost";
$username = "root";
$password = "Hemakoti@003";
$dbname = "student_job_portal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
