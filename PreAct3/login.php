<?php
// Start session
session_start();

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

// Validate user login credentials
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
      $_SESSION['user_id'] = $row['id'];
      header("Location: dashboard.php");
    } else {
      echo "Invalid password";
    }
  } else {
    echo "Invalid username";
  }
}

<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
</head>
<body>
  <h2>User Login</h2>
  <form action="login.php" method="post">
    <label>Username:</label>
    <input type="text" name="username" required><br>
    <label>Password:</label>
    <input type="password" name="password" required><br>
    <button type="submit" name="login">Login</button>
  </form>
</body>
</html>
