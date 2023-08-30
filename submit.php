<?php
// Database connection settings
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'survey';

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

// Insert data into the database
$sql = "INSERT INTO survey_data (name, email, age) VALUES ('$name', '$email', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "Survey data submitted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

