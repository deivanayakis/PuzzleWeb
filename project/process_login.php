<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "puzzle";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    $_SESSION['login_error'] = "An error occurred. Please try again later.";
    header("Location: login.php");
    exit();
}

// Sanitize input data
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query the database for the user
$sql = "SELECT email, password FROM student WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    // Verify the password
    if (password_verify($password, $hashed_password)) {
        // Authentication successful, create session
        $_SESSION['email'] = $row['email'];
        header("Location: dashboard.php"); // Redirect to the dashboard after successful login
        exit();
    } else {
        // Invalid password
        $_SESSION['login_error'] = "Invalid email or password.";
        header("Location: login.php"); // Redirect back to the login page with an error message
        exit();
    }
} else {
    // User not found
    $_SESSION['login_error'] = "Email not registered.";
    header("Location: login.php"); // Redirect back to the login page with an error message
    exit();
}

$conn->close();
?>