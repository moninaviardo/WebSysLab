<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve user information
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $username = $row['username'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $age = $row['age'];
  $birthday = $row['birthday'];
  $address = $row['address'];
}

// Handle form submissions
if (isset($_POST['update'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $age = $_POST['age'];
  $birthday = $_POST['birthday'];
  $address = $_POST['address'];

  $sql = "UPDATE users SET firstname='$firstname', lastname='$lastname', age='$age', birthday='$birthday', address
