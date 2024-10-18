<?php
$config = require '../config.php'; // Adjust path if necessary

$servername = $config['servername'];
$username = $config['username'];
$password = $config['password'];
$dbname = $config['dbname'];

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ID of the record to delete (ID remains 1)
$id_to_delete = 1;

// First, delete the existing record
$delete_stmt = $conn->prepare("DELETE FROM tracking_data WHERE id = ?");
$delete_stmt->bind_param("i", $id_to_delete);

if ($delete_stmt->execute()) {
   // Prepare and bind for inserting new record
$insert_stmt = $conn->prepare("INSERT INTO tracking_data (id, date_time_1, date_time_2, amount_paid, payment_method, track_number, currency_used, owners_name, traders_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$insert_stmt->bind_param("ississsss", $id, $date_time_1, $date_time_2, $amount_paid, $payment_method, $track_number, $currency_used, $owners_name, $traders_name);


    // Keep the ID fixed to 1
    $id = 1;

    // Get data from the form
    $date_time_1 = $_POST['inputField1'];
    $date_time_2 = $_POST['inputField2'];
    $amount_paid = floatval(str_replace(',', '', $_POST['inputField3'])); // Remove commas for decimal
    $payment_method = $_POST['inputField4'];
    $track_number = $_POST['inputField5'];
    $currency_used = $_POST['inputField6'];    
    $owners_name  = $_POST['inputField7'];
    $traders_name  = $_POST['inputField8'];

    // Execute the insert statement
    if ($insert_stmt->execute()) {
        header("Location: http://localhost/ipay-main/track/formm/check.php");
    } else {
        echo "Error: " . $insert_stmt->error;
    }

    // Close the insert statement
    $insert_stmt->close();
} else {
    echo "Error deleting record: " . $delete_stmt->error;
}

// Close connections
$delete_stmt->close();
$conn->close();
?>
