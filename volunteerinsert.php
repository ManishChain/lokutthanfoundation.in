<?php

//error_reporting(E_ALL);
//ini_set('display_errors', 1);

// Debug message to check if script is executing
//echo "Script is executing.<br>";

// Debug message to check contents of $_POST array
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

// Establish database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lokutthan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape form inputs
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $education_qualification = mysqli_real_escape_string($conn, $_POST['education_qualification']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // SQL query to insert data into database
    $sql = "INSERT INTO volunteer (first_name, last_name, email, phone, age, bio, gender, education_qualification, address, city, message)
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$age', '$bio', '$gender', '$education_qualification', '$address', '$city', '$message')";

    // Execute query and handle insertion success or failure
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Form submission not detected."; // Display if form submission not detected
}

// Close database connection
$conn->close();
?>
