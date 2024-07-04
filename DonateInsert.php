<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include your configuration file and mailer script
require 'config.php'; // Adjust this path to your configuration file
require 'mailer.php'; // Adjust this path to your mailer script

// Establish database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission if POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $full_name = $_POST['full_name'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $reference_id = isset($_POST['ReferenceId']) ? $_POST['ReferenceId'] : '';
    $pancard = isset($_POST['pancard']) ? $_POST['pancard'] : '';

    // File upload handling
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = array("jpg", "jpeg", "png", "pdf");

    // Validate file size
    if ($_FILES['image']['size'] > 200 * 1024) {
        header("Location: index.php?status=error&message=Image size must be less than 200KB.");
        exit;
    }

    // Validate file type
    if (!in_array($imageFileType, $allowed_types)) {
        header("Location: index.php?status=error&message=Only JPG, JPEG, PNG & PDF files are allowed.");
        exit;
    }

    // Move uploaded file to target directory
    if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        echo "Upload failed: " . $_FILES["image"]["error"];
        exit;
    }

    // Prepare SQL statement for database insertion
    $stmt = $conn->prepare("INSERT INTO donations (full_name, email, phone, address, ReferenceId, image, pancard) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $email, $phone, $address, $reference_id, $target_file, $pancard);

    // Execute SQL statement
    if ($stmt->execute()) {
        $last_id = $conn->insert_id;

        // Retrieve inserted data for email notification
        $select_sql = "SELECT full_name, email, phone, address, image, ReferenceId, pancard FROM donations WHERE id = $last_id";
        $result = $conn->query($select_sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Compose email content
            $subject = 'New Donation: ' . $full_name;
            $body = "New Donation:\n\n";
            $body .= "Name: {$row['full_name']}\n";
            $body .= "Email: {$row['email']}\n";
            $body .= "Phone: {$row['phone']}\n";
            $body .= "Address: {$row['address']}\n";
            $body .= "Reference ID: {$row['ReferenceId']}\n\n";
            $body .= "Pancard: {$row['pancard']}\n";

            // Send email notification
            if (sendEmail('priyanshi@manacleindia.com', 'manacle', $subject, $body, $row['image'])) {
                header("Location: index.php?status=success&message=New record created and email sent successfully.");
            } else {
                header("Location: index.php?status=error&message=New record created but failed to send email.");
            }
        } else {
            header("Location: index.php?status=error&message=No donations found.");
        }
    } else {
        header("Location: index.php?status=error&message=Error: " . $stmt->error);
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
    exit;
}

?>
