<?php
// Include the configuration file and mailer function
require_once 'config.php';
require_once 'mailer.php';

// Initialize variables to store form data
$name = $email = $subject = $message = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and store form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Validate recipient email address
    $recipient = "priyanshi@manacleindia.com"; // Default recipient
    if (filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
        // Create MySQL connection
        $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement
        $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        // Bind parameters
        $stmt->bind_param("ssss", $name, $email, $subject, $message);

        // Execute SQL statement and handle success/failure
        if ($stmt->execute()) {
            echo "Data submitted successfully!";

            // Send email notification
            $emailSubject = 'contact';
            $emailBody = "Dear $name,\n\nThank you for your message. We have received the following information:\n\nName: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

            if (sendEmail($recipient, 'manacle', $emailSubject, $emailBody)) {
                echo 'Email sent successfully!';
            } else {
                echo 'Failed to send email.';
            }

        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();

        // Close connection
        $conn->close();
    } else {
        echo "Invalid recipient email address.";
    }
}
?>
