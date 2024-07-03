<?php
// Step 1: Include necessary files
require 'config.php'; // Include your configuration file
require 'mailer.php'; // Include your mailer script

// Step 2: Database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 3: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 4: Collect data from the form
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pancard = $_POST['pancard'];
    $reference_id = $_POST['ReferenceId']; // Assuming "ReferenceId" is the name of your input field
    $image = $_FILES['image']; // Assuming "image" is the name of your input field

    // Step 5: Validate data (basic validation)
    // if (empty($full_name) || empty($email) || empty($phone) || empty($reference_id)) {
    //     header("Location: index.php?status=error&message=All fields marked with * are required.");
    //     exit;
    // }

    // Handle image upload
    if ($image['size'] > 200 * 1024) {
        header("Location: index.php?status=error&message=Image size must be less than 200KB.");
        exit;
    }

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = array("jpg", "jpeg", "png", "pdf");

    // if (!in_array($imageFileType, $allowed_types)) {
    //     header("Location: index.php?status=error&message=Only JPG, JPEG, PNG & PDF files are allowed.");
    //     exit;
    // }

    // if (!move_uploaded_file($image["tmp_name"], $target_file)) {
    //     header("Location: index.php?status=error&message=There was an error uploading your file.");
    //     exit;
    // }

    // Step 6: Prepare and execute SQL statement to insert data
    $sql = "INSERT INTO donations (full_name, email, phone, address, pancard, ReferenceId, image) 
            VALUES ('$full_name', '$email', '$phone', '$address', '$pancard', '$reference_id', '$target_file')";

    if ($conn->query($sql) === TRUE) {
        // Success message
        $last_id = $conn->insert_id;
        $select_sql = "SELECT full_name, email, phone, address, pancard, ReferenceId, image FROM donations WHERE id = $last_id";
        $result = $conn->query($select_sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Step 7: Prepare email content
            $subject = 'New Donation: ' . $full_name;
            $body = "New Donation:\n\n";
            $body .= "Name: {$row['full_name']}\n";
            $body .= "Email: {$row['email']}\n";
            $body .= "Phone: {$row['phone']}\n";
            $body .= "Address: {$row['address']}\n";
            $body .= "Pancard: {$row['pancard']}\n";
            $body .= "Reference ID: {$row['ReferenceId']}\n\n";
            $body .= "Image: {$row['image']}\n";

            // Step 8: Send email
            if (sendEmail('priyanshi@manacleindia.com', 'manacle', $subject, $body)) {
                header("Location: index.php?status=success&message=New record created and email sent successfully.");
            } else {
                header("Location: index.php?status=error&message=New record created but failed to send email.");
            }
        } else {
            header("Location: index.php?status=error&message=No donations found.");
        }
    } else {
        header("Location: index.php?status=error&message=Error: " . $sql . "<br>" . $conn->error);
    }
    exit;
}

// Step 9: Close database connection
$conn->close();
?>
