<?php

// Include the configuration file
require_once 'config.php';

// Create connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare the SQL statement
    $sql = "INSERT INTO volunteer (full_name, email, phone, age, describe_yourself, gender, education_qualification, image, address, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Check if prepare() was successful
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssssisssss", $full_name, $email, $phone, $age, $describe_yourself, $gender, $education_qualification, $image, $address, $message);

    // Set parameters and execute
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $describe_yourself = $_POST['describe_yourself'];
    $gender = $_POST['gender'];
    $education_qualification = $_POST['education_qualification'];
    $image = $_POST['image'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Execute SQL statement and handle success/failure
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
