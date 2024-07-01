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
    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO volunteer (first_name, last_name, email, phone, age, bio, gender, education_qualification, address, city, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssissssss", $first_name, $last_name, $email, $phone, $age, $bio, $gender, $education_qualification, $address, $city, $message);

    // Set parameters and execute
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $bio = $_POST['bio'];
    $gender = $_POST['gender'];
    $education_qualification = $_POST['education_qualification'];
    $address = $_POST['address'];
    $city = $_POST['city'];
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
