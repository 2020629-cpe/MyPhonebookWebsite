<?php

session_start(); // Start the session
$con = mysqli_connect("localhost","id21003520_llaneskyla","Javier@2020","id21003520_kylallanes");

if (!isset($_SESSION['username'])) {
    // Redirect to the login page
    header("Location: login.php");
    exit;
}

// Check connection
if (mysqli_connect_errno()) {
  die('Database connection failed: ' . mysqli_connect_error());
  exit();
}

$current_username = $_SESSION['username'];

$con = mysqli_connect("localhost","id21003520_llaneskyla","Javier@2020","id21003520_kylallanes");

        
// Fetch all contacts
$sql = "SELECT * FROM contacts";
$result = mysqli_query($con, $sql);

$contacts = array();
while ($row = mysqli_fetch_assoc($result)) {
  $contacts[] = $row;
}

// Convert the contacts array to JSON and send the response
header('Content-Type: application/json');
echo json_encode($contacts);

// Close the database connection
mysqli_close($con);
?>