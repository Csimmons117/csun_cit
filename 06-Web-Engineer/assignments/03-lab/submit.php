<?php
$servername = "192.168.1.170";
$username = "Cameron";
$password = "Crystalbeast2@";
$dbname = "comp484";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Can't connect to the server: " . $conn->connect_error);
}else{
    echo "CONNECTED";
}

// Get POST data
//$firstName = $_POST['firstname'];
//$lastName = $_POST['lastname'];
//
//// Prepare and bind
//$stmt = $conn->prepare("INSERT INTO users (first_name, last_name) VALUES (?, ?)");
//$stmt->bind_param("ss", $firstName, $lastName);
//
//// Execute the statement
//if ($stmt->execute()) {
//    echo "Record added successfully.";
//} else {
//    echo "Error: " . $stmt->error;
//}
//
//// Close the statement and connection
//$stmt->close();
//$conn->close();
?>
