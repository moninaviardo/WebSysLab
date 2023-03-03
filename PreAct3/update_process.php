<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  header('Location: login.php');
  exit;
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

// Update user information in database
if (isset($_POST['update'])) {
  $user_id = $_SESSION['user_id'];
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $age = $_POST['age'];
  $birthday = $_POST['birthday'];
  $address = $_POST['address'];

  $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', age='$age', birthday='$birthday', address='$address' WHERE id='$user_id'";

  if ($conn->query($sql) === TRUE) {
    header('Location: dashboard.php');
  } else {
    echo "Error updating record: " . $conn->error;
  }
}

$conn->close();
?>
