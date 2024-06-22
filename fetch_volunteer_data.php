<?php

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

// Update status if requested via POST (example scenario)
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['volunteer_id'])) {
    $volunteer_id = mysqli_real_escape_string($conn, $_POST['volunteer_id']);

    // SQL query to update the status of a specific volunteer
    $update_sql = "UPDATE volunteer SET status = 1 WHERE id = $volunteer_id";

    if ($conn->query($update_sql) === TRUE) {
        echo "Status updated successfully";
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

// SQL query to fetch all active records (where status = 1) from the volunteer table
$sql = "SELECT first_name, last_name, education_qualification, bio FROM volunteer WHERE status = 1 ORDER BY id DESC";
$result = $conn->query($sql);

// Check if the query returned any result
if ($result->num_rows > 0) {
    // Loop through each active volunteer
    while ($row = $result->fetch_assoc()) {
        // Variables for dynamic content
        $name = $row['first_name'] . " " . $row['last_name'];
        $education = $row['education_qualification'];
        $bio = $row['bio'];
        
        // Render the data for each volunteer
        ?>
        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100" style="margin-left:150px;">
            <div class="member-img">
                <img src="assets/img/team/rishi.jpeg" class="img-fluid" alt="">
                <div class="social">
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/rishimb/"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info text-center">
                <h4><?php echo htmlspecialchars($name); ?></h4>
                <span><?php echo htmlspecialchars($education); ?></span>
                <p><?php echo htmlspecialchars($bio); ?></p>
            </div>
        </div>
        <?php
    }
} else {
    // No active volunteers found with status = 1
    echo "No active volunteers found.";
}

// Close database connection
$conn->close();
?>
