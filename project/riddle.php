<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['email'])) {
    // Redirect to the login page if the user is not authenticated
    header("Location: login.php");
    exit();
}

// Get the username from the session
$userName = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puzzle Web Dashboard</title>
    <link rel="stylesheet" href="riddlestyles.css">
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
        <div class="container">
            <h2>Riddle Game</h2>
            <form method="post" action="process_answers.php">
            <?php
            // Include database connection
            include("db_connection.php");

            // Fetch questions from the database
            $query = "SELECT DISTINCT id, question, hint FROM riddles ORDER BY RAND() LIMIT 20;";
            $result = mysqli_query($conn, $query);

            // Handle database query errors
            if (!$result) {
                die("Database query error: " . mysqli_error($conn));
            }

            $questionsArray = [];

            // Populate $questionsArray with data from the database
            while ($row = mysqli_fetch_assoc($result)) {
                $questionsArray[] = $row;
            }
            
            if (!empty($questionsArray)) {
                foreach ($questionsArray as $index => $questionData) {
            ?>
            <div class="question">
                        <p><?php echo htmlspecialchars($questionData['question']); ?></p>
                        <button type="button" class="hint-button" data-hint="<?php echo htmlspecialchars($questionData['hint']); ?>">Hint</button>
                        <input type="hidden" name="question_ids[]" value="<?php echo $questionData['id']; ?>">
                        <input type="text" name="answers[]">
                    </div>
            <?php
                }
            } else {
                echo "<p>No questions available at the moment.</p>";
            }
            ?>
            <button type="submit" id="submitButton">Submit</button>
        </form>
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

    <script>
        // JavaScript to show hints when Hint button is clicked
        var hintButtons = document.querySelectorAll(".hint-button");
        hintButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                var hint = button.getAttribute("data-hint");
                alert("Hint: " + hint);
            });
        });
        document.addEventListener("DOMContentLoaded", function()  {
    // Get question IDs and user answers from input fields
    var questionIds = document.querySelectorAll("input[name='question_ids[]']");
    var userAnswers = document.querySelectorAll("input[name='answers[]']");

    // Create an array to store question IDs and corresponding user answers
    var userResponses = [];

    // Loop through question IDs and user answers, store them in the userResponses array
    for (var i = 0; i < questionIds.length; i++) {
        var questionId = questionIds[i].value;
        var userAnswer = userAnswers[i].value;
        userResponses.push({ questionId: questionId, userAnswer: userAnswer });
    }


    console.log("User Responses:", userResponses);
    // Send userResponses array to the server using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process_answers.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the server response if needed
            console.log(xhr.responseText);
        }
    };
    xhr.send(JSON.stringify(userResponses));
});
    alert(userResponses);
    </script>
</body>

</html>