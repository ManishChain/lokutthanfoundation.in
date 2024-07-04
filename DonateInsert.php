<?php

require 'config.php'; // Include your configuration file
require 'mailer.php'; // Include your mailer script

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $reference_id = $_POST['ReferenceId'];
    $pancard = isset($_POST['pancard']) ? $_POST['pancard'] : '';

    $image_uploaded = !empty($_FILES["image"]["name"]);
    $target_file = "";
    $imageFileType = "";

    if ($image_uploaded) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowed_types = array("jpg", "jpeg", "png", "pdf");

        if ($_FILES['image']['size'] > 200 * 1024) {
            header("Location: index.php?status=error&message=Image size must be less than 200KB.");
            exit;
        }

        if (!in_array($imageFileType, $allowed_types)) {
            header("Location: index.php?status=error&message=Only JPG, JPEG, PNG & PDF files are allowed.");
            exit;
        }

        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "Upload failed: " . $_FILES["image"]["error"];
            exit;
        }
    }

    $stmt = $conn->prepare("INSERT INTO donations (full_name, email, phone, address, ReferenceId, image, pancard) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $email, $phone, $address, $reference_id, $target_file, $pancard);

    if ($stmt->execute()) {
        $last_id = $conn->insert_id;

        $select_sql = "SELECT full_name, email, phone, address, image, ReferenceId, pancard FROM donations WHERE id = $last_id";
        $result = $conn->query($select_sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $subject = 'New Donation: ' . $full_name;
            $body = "New Donation:\n\n";
            $body .= "Name: {$row['full_name']}\n";
            $body .= "Email: {$row['email']}\n";
            $body .= "Phone: {$row['phone']}\n";
            $body .= "Address: {$row['address']}\n";
            $body .= "Reference ID: {$row['ReferenceId']}\n\n";
            $body .= "Pancard: {$row['pancard']}\n";

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

    $stmt->close();
    $conn->close();
    exit;
}
?>
