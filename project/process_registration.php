<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $qualification = $_POST["qualification"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if password and confirm_password match
    if ($password !== $confirm_password) {
        echo "Password and confirm password do not match.";
    } else {
        // Hash the password for secure storage
        $passwd = password_hash($password, PASSWORD_DEFAULT);
        // Database connection parameters (adjust these according to your database setup)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "puzzle";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL query to insert data into the student table
        $stmt = $conn->prepare("INSERT INTO student (Firstname, Lastname, DOB, Qualification, Email, Phoneno, Password, Points) VALUES (?, ?, ?, ?, ?, ?, ?, 0)");
        $stmt->bind_param("sssssss", $first_name, $last_name, $dob, $qualification, $email, $phone, $passwd);

if ($stmt->execute()) {
    header("Location: login.php"); // Redirect to the dashboard after successful login
        exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and database connection
$stmt->close();
$conn->close();
    }
}
?>




