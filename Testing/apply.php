<?php
include 'config.php';

$student_id = $_POST['student_id'];
$job_id = $_POST['job_id'];

$sql = "INSERT INTO applications (student_id, job_id) VALUES ('$student_id', '$job_id')";
if ($conn->query($sql) === TRUE) {
    echo "Application successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
