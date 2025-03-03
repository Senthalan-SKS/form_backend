<?php
k
    // Database connection details
    $servername = "localhost";
    $username = "root"; // Default username for XAMPP
    $password = ""; // Default password for XAMPP
    $dbname = "form_test"; // Name of your database

    // Create a connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize input data
        $name = htmlspecialchars($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = htmlspecialchars($_POST['password']);
        $gender = htmlspecialchars($_POST['gender']);
        $agree = isset($_POST['agree']) ? 'Yes' : 'No';
        
        } else {
            echo "Form not submitted";
        }
 
        // Insert data into the database
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<h2>Form Submitted Successfully!</h2>";
            echo "Name: $name<br>";
            echo "Email: $email<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        
    }

    // Close the connection
    $conn->close();


 
?>
