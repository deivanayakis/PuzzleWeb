<?php
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Get the user's name from the session
$userName = $_SESSION['email']; // Replace 'user_name' with the actual session variable name storing the user's name

// Fetch data from the progress table
// Modify the database connection and query as per your setup
include("db_connection.php"); // Include your database connection file

$query = "SELECT date_time, mark FROM progress WHERE username = '$userName'";
$result = mysqli_query($conn, $query);

$dates = [];
$marks = [];

while ($row = mysqli_fetch_assoc($result)) {
    $dates[] = $row['date_time'];
    $marks[] = $row['mark'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Web Dashboard</title>
    <link rel="stylesheet" href="progressstyles.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>

<body>
    <!-- Header Section -->
    <div class="header">
        <div class="title-section">
            <div class="logo">
                <img src="logo.png" alt="Puzzle Web Logo">
            </div>
            <h1>Puzzle Web</h1>
        </div>
        <div class="user-profile">
            <img src="user.png" alt="Profile Picture">
            <span class="username"><?php echo htmlspecialchars($userName); ?></span>
            <div class="profile-menu">
                <ul>
                    <li><a href="profile.php">My Profile</a></li>
                    <li><a href="#">My Progress</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
    <canvas id="myChart" width="400" height="400"></canvas>
        <!-- Content specific to each category goes here -->
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <a href="https://www.facebook.com/YourFacebookPage" class="social-icon">
            <img src="facebook.svg" alt="Facebook Icon">
        </a> <!-- Facebook -->

        <a href="https://twitter.com/YourTwitterProfile" class="social-icon">
            <img src="twitter.svg" alt="Twitter Icon">
        </a> <!-- Twitter -->

        <a href="https://www.instagram.com/YourInstagramProfile" class="social-icon">
            <img src="instagram.svg" alt="Instagram Icon">
        </a> <!-- Instagram -->

        <p>&copy; <?php echo date("Y"); ?> Puzzle Web. All rights reserved.</p>
    </div>
    <script>
        // JavaScript to create the bar chart using Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($dates); ?>,
                datasets: [{
                    label: 'Marks',
                    data: <?php echo json_encode($marks); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Bar color
                    borderColor: 'rgba(75, 192, 192, 1)', // Border color
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>