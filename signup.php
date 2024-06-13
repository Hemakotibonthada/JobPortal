<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Placeholder for actual signup processing
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $collegeName = $_POST['collegeName'];
    $course = $_POST['course'];
    $stream = $_POST['stream'];
    $semester = $_POST['semester'];
    $backlog = $_POST['backlog'];
    $skills = $_POST['skills'];
    $address = $_POST['address'];
    
    // Handle file upload
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $resume = $_FILES['resume'];
        $uploadDirectory = 'uploads/';
        $uploadFile = $uploadDirectory . basename($resume['name']);
        
        if (move_uploaded_file($resume['tmp_name'], $uploadFile)) {
            // File upload successful
        } else {
            // File upload failed
        }
    }

    // For demo purposes, let's just redirect to the home page
    header("Location: index.html");
    exit();
}
?>
