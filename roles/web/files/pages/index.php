<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// Load database credentials
$credentials = parse_ini_file('../db_credentials.ini');

// Check if credentials are properly loaded
if (!$credentials) {
    die("Error: Unable to load database credentials.");
}

$host = $credentials['host'];
$username = $credentials['username'];
$password = $credentials['password'];
$database = $credentials['database'];

// Connect to MySQL database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from users table
$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

// Display data
if ($result->num_rows > 0) {
    echo "<h1>Users</h1><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>ID: " . $row['id'] . " - Name: " . $row['name'] . " - Email: " . $row['email'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

// Close connection
$conn->close();
?>
