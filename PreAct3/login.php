<?php

session_start();

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

// Process login form submission
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Verify username and password in database
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check for errors
    if (!$result) {
        die('Error retrieving user information: ' . mysqli_error($conn));
    }

    // If user exists, set session variable and redirect to home page
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        header('Location: home.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}

// Display login form
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
    <form method="post" action="login.php">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>

<?php

// Close the database connection
mysqli_close($conn);

?>
