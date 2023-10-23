<?php
session_start();

// Check if the user is logged in, if not, redirect to login page
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Get the user's name from the session
$userName = $_SESSION['email']; // Replace 'user_name' with the actual session variable name storing the user's name
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Web Dashboard</title>
    <link rel="stylesheet" href="dashboardstyles.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
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
                    <li><a href="progress.php">My Progress</a></li>
                    <li><a href="index.html">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="main-content">
        <div class="categories">
            
           
            <a href="riddle.php" class="category-button">
            <img src="riddle.png" alt="Riddle Icon">Riddles</a>
            <a href="" class="category-button">
            <img src="sudoku.png" alt="Sudoku Icon">Sudoku</a>
            <a href="" class="category-button">
            <img src="quiz.png" alt="Quiz Icon">Quiz</a>
            <!-- Add more categories as needed -->
        </div>
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
</body>

</html>