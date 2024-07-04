<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "robot_control";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database to get the last stored direction
$sql = "SELECT direction FROM robot_directions ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

// Display the last stored direction
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo  $row["direction"];
} else {
    echo "No direction stored in the database yet.";
}

$conn->close();
?>