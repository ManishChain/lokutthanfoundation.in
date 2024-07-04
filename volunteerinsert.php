<?php
// Include the configuration file and mailer function
require_once 'config.php';
require_once 'mailer.php';

// Initialize variables to store form data and image path
$full_name = $email = $phone = $age = $describe_yourself = $gender = $education_qualification = $address = $message = $image = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // File upload handling
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = 'uploads/';
        $target_file = $target_dir . basename($_FILES['image']['name']);
        
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image = $target_file;
        } else {
            die("Sorry, there was an error uploading your file.<br>");
        }
    } else {
        die("No file was uploaded or there was an error uploading the file.<br>");
    }

    // Assign form data to variables and sanitize if necessary
    $full_name = isset($_POST['full_name']) ? htmlspecialchars($_POST['full_name']) : '';
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $age = isset($_POST['age']) ? htmlspecialchars($_POST['age']) : '';
    $describe_yourself = isset($_POST['describe_yourself']) ? htmlspecialchars($_POST['describe_yourself']) : ''; 
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '';
    $education_qualification = isset($_POST['education_qualification']) ? htmlspecialchars($_POST['education_qualification']) : '';
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Create MySQL connection
    $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO volunteer (full_name, email, phone, age, describe_yourself, gender, education_qualification, image, address, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssssisssss", $full_name, $email, $phone, $age, $describe_yourself, $gender, $education_qualification, $image, $address, $message);

    // Execute SQL statement and handle success/failure
    if ($stmt->execute()) {
        // Send email with form data
        $subject = "New Volunteer Application";
        $body = "
            New Volunteer Application\n
            Full name: $full_name\n
            Email: $email\n
            Phone: $phone\n
            Age: $age\n
            Describe yourself: $describe_yourself\n 
            Gender: $gender\n
            Education qualification: $education_qualification\n
            Image: $image\n
            Address: $address\n
            Message: $message\n
        ";


        $recipient = "priyanshi@manacleindia.com"; // Replace with the recipient's email address
        $sender_email = "priyanshi@manacleindia.com"; // Replace with the sender's email address

        if (sendEmail($recipient, 'manacle', $subject, $body, $sender_email, $image)) {
            echo "New record created successfully and email sent successfully";
        } else {
            echo "New record created successfully but failed to send email";
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
}
?>
