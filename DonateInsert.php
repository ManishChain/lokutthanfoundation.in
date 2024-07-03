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
    $reference_id = $_POST['ReferenceId'];
    $pancard = $_POST['pancard'];

    // Handle image upload
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

    // Step 5: Prepare and execute SQL statement to insert data using prepared statement
    $stmt = $conn->prepare("INSERT INTO donations (full_name, email, phone, address, ReferenceId, image, pancard) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $email, $phone, $address, $reference_id, $target_file, $pancard);

    if ($stmt->execute()) {
        // Success message
        $last_id = $conn->insert_id;

        // Step 6: Prepare and execute SQL statement to retrieve inserted data
        $select_sql = "SELECT full_name, email, phone, address, image, ReferenceId, pancard FROM donations WHERE id = ?";
        $stmt_select = $conn->prepare($select_sql);
        $stmt_select->bind_param("i", $last_id);
        $stmt_select->execute();
        $result = $stmt_select->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Step 7: Prepare email content
            $subject = 'New Donation: ' . $full_name;
            $body = "New Donation:\n\n";
            $body .= "Name: {$row['full_name']}\n";
            $body .= "Email: {$row['email']}\n";
            $body .= "Phone: {$row['phone']}\n";
            $body .= "Address: {$row['address']}\n";
            $body .= '<p>Image:</p>';
            $body .= '<img src="cid:image_cid" alt="Donation Image">'; // CID reference for the embedded image
            $body .= "Reference ID: {$row['ReferenceId']}\n\n";
            $body .= "Pancard: {$row['pancard']}\n";

            // Step 8: Attach the image to the email
            $attachment = $row['image']; // Assuming this is the path to the uploaded image
            $attachment_filename = basename($attachment);

            // Step 9: Send email with attachment
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.example.com'; // SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'your_email@example.com'; // SMTP username
                $mail->Password = 'your_password'; // SMTP password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('your_email@example.com', 'Your Name');
                $mail->addAddress('priyanshi@manacleindia.com', 'Recipient Name'); // Add a recipient

                // Attachments
                $mail->addAttachment($attachment, $attachment_filename); // Add attachments

                // Content
                $mail->isHTML(false); // Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $body;

                $mail->send();
                header("Location: index.php?status=success&message=New record created and email sent successfully.");
            } catch (Exception $e) {
                header("Location: index.php?status=error&message=New record created but failed to send email. Error: {$mail->ErrorInfo}");
            }
        } else {
            header("Location: index.php?status=error&message=No donations found.");
        }
    } else {
        header("Location: index.php?status=error&message=Error: " . $stmt->error);
    }

    // Step 10: Close statement and database connection
    $stmt->close();
    $stmt_select->close();
    $conn->close();
    exit;
}
?>
