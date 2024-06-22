<?php

 $conn = mysqli_connect('localhost','root','','lokutthan');
  if (isset($_POST['submit'])) {
    $organization_name = mysqli_real_escape_string($conn, $_POST['organization_name']);
    $organization_registration_details = mysqli_real_escape_string($conn, $_POST['organization_registration_details']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $street_address = mysqli_real_escape_string($conn, $_POST['street_address']);
    $street_address_line2 = mysqli_real_escape_string($conn, $_POST['street_address_line2']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);
    $work_done_2023_2024 = mysqli_real_escape_string($conn, $_POST['work_done_2023_2024']);
    $prize_details = mysqli_real_escape_string($conn, $_POST['prize_details']);

    $sql = "INSERT INTO  register (
        organization_name,
        organization_registration_details,
        first_name,
        last_name,
        email,
        phone_number,
        address,
        street_address,
        street_address_line2,
        state,
        postal_code,
        work_done_2023_2024,
        prize_details
    ) VALUES (
        '$organization_name',
        '$organization_registration_details',
        '$first_name',
        '$last_name',
        '$email',
        '$phone_number',
        '$address',
        '$street_address',
        '$street_address_line2',
        '$state',
        '$postal_code',
        '$work_done_2023_2024',
        '$prize_details'
    )";

    $data = mysqli_query($conn, $sql);

    if ($data) {
    echo "Record inserted successfully";
    header("Location: index.php"); // Redirect to index page
    exit(); // Ensure that the script stops executing after the redirection
} else {
    echo "Error inserting record: " . mysqli_error($conn);
}
    // Close the connection
    mysqli_close($conn);
}

   
  ?>