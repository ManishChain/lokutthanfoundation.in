// main.php
<?php
require 'vendor/autoload.php'; // Include Composer's autoload file
require 'config.php';
require 'mailer.php'; // Include the mailer file

// Step 1: Database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

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
            $row = $result->fetch_assoc();

            // Prepare email content
            $subject = 'New Donation: ' . $first_name . ' ' . $last_name;
            $body = "New Donation:\n\n";
            $body .= "Name: {$row['first_name']} {$row['last_name']}\n";
            $body .= "Email: {$row['email']}\n";
            $body .= "Phone: {$row['phone']}\n";
            $body .= "Address: {$row['address']}, {$row['city']}\n";
            $body .= "Pancard: {$row['pancard']}\n";
            $body .= "Reference ID: {$row['ReferenceId']}\n\n";

            // Send email
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

// Step 7: Close database connection
$conn->close();
?>
