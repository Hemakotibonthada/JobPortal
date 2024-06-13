<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file'];
        $uploadDirectory = 'uploads/';
        $uploadFile = $uploadDirectory . basename($file['name']);

        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            echo "File successfully uploaded.";
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "No file uploaded or there was an upload error.";
    }
}
?>
