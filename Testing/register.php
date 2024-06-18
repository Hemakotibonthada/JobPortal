<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$major = $_POST['major'];

$sql = "INSERT INTO students (name, email, password, major) VALUES ('$name', '$email', '$password', '$major')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
