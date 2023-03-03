<?php
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

// Insert user information into the database
if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $age = $_POST['age'];
  $birthday = $_POST['birthday'];
  $address = $_POST['address'];

  $sql = "INSERT INTO users (username, password, firstname, lastname, age, birthday, address)
          VALUES ('$username', '$password', '$firstname', '$lastname', '$age', '$birthday', '$address')";

  if ($conn->query($sql) === TRUE) {
    echo "User registered successfully