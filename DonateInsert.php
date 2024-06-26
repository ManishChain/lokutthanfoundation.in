<?php
session_start();

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Establish database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lokutthan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    $_SESSION['message'] = "Connection failed: " . $conn->connect_error;
    $_SESSION['message_type'] = 'error';
    header("Location: index.php");
    exit();
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required POST data is set
    if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['city'], $_POST['pancard'], $_POST['ReferenceId'])) {
        // Prepare and bind parameters
        $stmt = $conn->prepare("INSERT INTO donations (first_name, last_name, email, phone, address, city, pancard, ReferenceId) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        // Check if preparation was successful
        if (!$stmt) {
            $_SESSION['message'] = "Prepare failed: " . $conn->error;
            $_SESSION['message_type'] = 'error';
            header("Location: index.php");
            exit();
        }

        // Bind parameters
        $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $phone, $address, $city, $pancard, $ReferenceId);

        // Set parameters and execute
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $pancard = $_POST['pancard'];
        $ReferenceId = $_POST['ReferenceId'];

        // Execute SQL statement and handle success/failure
        if ($stmt->execute()) {
            $_SESSION['message'] = "Data successfully submitted.";
            $_SESSION['message_type'] = 'success';
        } else {
            $_SESSION['message'] = "Error: " . $stmt->error;
            $_SESSION['message_type'] = 'error';
        }

        // Close statement
        $stmt->close();
    } else {
        $_SESSION['message'] = "Error: Missing required form data.";
        $_SESSION['message_type'] = 'error';
    }
}

// Close connection
$conn->close();
header("Location: index.php");
exit();
?>
