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

// Get user information from database
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
</head>
<body>
  <h2>Update Profile</h2>
  <form method="post" action="update_process.php">
    <label>Username</label><br>
    <input type="text" name="username" value="<?php echo $row['username']; ?>"><br>
    <label>Password</label><br>
    <input type="password" name="password"><br>
    <label>First Name</label><br>
    <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br>
    <label>Last Name</label><br>
    <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br>
    <label>Age</label><br>
    <input type="number" name="age" value="<?php echo $row['age']; ?>"><br>
    <label>Birthday</label><br>
    <input type="date" name="birthday" value="<?php echo $row['birthday']; ?>"><br>
    <label>Address</label><br>
    <textarea name="address"><?php echo $row['address']; ?></textarea><br>
    <input type="submit" name="update" value="Update">
  </form>
</body>
</html>
<?php
} else {
  echo "User not found";
}
$conn->close();
?>