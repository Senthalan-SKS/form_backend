<?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Directory to store uploaded files
        $uploadDir = 'C:\xampp\htdocs\simple web application\file_directory\saved_files\ ';

        // Create the directory if it doesn't exist
        // if (!is_dir($uploadDir)) {
        //     mkdir($uploadDir, 0777, true);
        // }

        // Access the uploaded file
        $file = $_FILES['file'];

        // Check for upload errors
        if ($file['error'] === UPLOAD_ERR_OK) {         
            $fileName = basename($file['name']); // Get the file name
            $targetFilePath = $uploadDir . $fileName;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($file['tmp_name'], $targetFilePath)) {
                echo "File uploaded successfully! Saved at: " . $targetFilePath;
            } else {
                echo "Error: Failed to move the uploaded file.";
            }
        } else {
            echo "Error: File upload failed with error code " . $file['error'];
        }
    } else {
        echo "Invalid request method.";
    }
    
?>
