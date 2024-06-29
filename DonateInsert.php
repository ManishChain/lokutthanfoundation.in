<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.9.1/src/PHPMailer.php';
require 'PHPMailer-6.9.1/src/Exception.php';
require 'PHPMailer-6.9.1/src/SMTP.php';

// Step 1: Database connection
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

// Step 2: Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 3: Collect data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pancard = $_POST['pancard'];
    $reference_id = $_POST['ReferenceId']; // Assuming "ReferenceId" is the name of your input field
    
    // Step 4: Validate data (basic validation)
    if (empty($first_name) || empty($email) || empty($phone) || empty($reference_id)) {
        header("Location: index.php?status=error&message=All fields marked with * are required.");
        exit;
    }
    
    // Step 5: Prepare and execute SQL statement to insert data
    $sql = "INSERT INTO donations (first_name, last_name, email, phone, address, city, pancard, ReferenceId) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$address', '$city', '$pancard', '$reference_id')";

    if ($conn->query($sql) === TRUE) {
        // Success message
        $last_id = $conn->insert_id;
        $select_sql = "SELECT first_name, last_name, email, phone, address, city, pancard, ReferenceId FROM donations WHERE id = $last_id";
        $result = $conn->query($select_sql);

        if ($result->num_rows > 0) {
            // Initialize PHPMailer
            $mail = new PHPMailer(true); // Enable verbose debug output for testing, set to 0 for production

            try {
                //Server settings
                $mail->isSMTP(); // Set mailer to use SMTP
                $mail->Host = 'smtp.mailhostbox.com'; // Specify main and backup SMTP servers
                $mail->SMTPAuth = true; // Enable SMTP authentication
                $mail->Username = 'priyanshi@manacleindia.com'; // SMTP username
                $mail->Password = 'LrEV#Gw3'; // SMTP password or app-specific password
                $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587; // TCP port to connect to

                //Recipients
                $mail->setFrom('priyanshi@manacleindia.com', 'manacle');
                $mail->addAddress('priyanshi@manacleindia.com', 'manacle'); // Add a recipient

                //Content
                $mail->isHTML(false); // Set email format to HTML
                $mail->Subject = 'New Donation: ' . $first_name . ' ' . $last_name;
                
                // Email body
                $body = "New Donation:\n\n";
                $row = $result->fetch_assoc();
                $body .= "Name: {$row['first_name']} {$row['last_name']}\n";
                $body .= "Email: {$row['email']}\n";
                $body .= "Phone: {$row['phone']}\n";
                $body .= "Address: {$row['address']}, {$row['city']}\n";
                $body .= "Pancard: {$row['pancard']}\n";
                $body .= "Reference ID: {$row['ReferenceId']}\n\n";

                $mail->Body = $body;

                // Attempt to send email
                if ($mail->send()) {
                    header("Location: index.php?status=success&message=New record created and email sent successfully.");
                } else {
                    header("Location: index.php?status=error&message=New record created but failed to send email.");
                }
            } catch (Exception $e) {
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

// Step 7: Close database connection
$conn->close();
?>
