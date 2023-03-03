<?php

// Connect to the database
$dbhost = 'localhost';
$dbuser = 'myuser';
$dbpass = 'mypassword';
$dbname = 'mydatabase';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check for errors
if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}

// Query the database to retrieve user information
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die('Error retrieving user information: ' . mysqli_error($conn));
}

// Loop through the results and display user information
while ($row = mysqli_fetch_assoc($result)) {
    echo 'User ID: ' . $row['id'] . '<br>';
    echo 'Username: ' . $row['username'] . '<br>';
    echo 'Email: ' . $row['email'] . '<br><br>';
}

// Close the database connection
mysqli_close($conn);

?>
