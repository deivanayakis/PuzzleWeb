<?php
session_start();
include("db_connection.php");

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the necessary data is set in the POST request
    if (isset($_POST['question_ids']) && isset($_POST['answers'])) {
        // Get user session data (assuming 'email' is the session variable storing user data)
        if (isset($_SESSION['email'])) {
            $userName = $_SESSION['email'];

            // Get question IDs and user answers from the POST data
            $questionIds = $_POST['question_ids'];
            $userAnswers = $_POST['answers'];

            $correctAnswers = 0;
            // Loop through question IDs and user answers
            foreach ($questionIds as $index => $questionId) {
                // Retrieve correct answer from the database based on question ID
                $query = "SELECT correct_answer FROM riddles WHERE id = $questionId";
                $result = mysqli_query($conn, $query);

                // Handle database query errors
                if (!$result) {
                    die("Database query error: " . mysqli_error($conn));
                }

                $row = mysqli_fetch_assoc($result);
                $correctAnswer = $row['correct_answer'];

                // Compare user's answer with correct answer
                if (strtolower($userAnswers[$index]) == strtolower($correctAnswer)) {
                    $correctAnswers++;
                }
            }

            // Insert user's mark into the progress table
            $currentDateTime = date("Y-m-d H:i:s");
            $insertQuery = "INSERT INTO progress (username, mark,date_time) VALUES ('$userName', $correctAnswers,'$currentDateTime')";
            if (mysqli_query($conn, $insertQuery)) {
                echo "<script>alert('Submitted! Your score : ($correctAnswers/20).');</script>";
                echo "<script>window.location.href='dashboard.php';</script>";
                exit();
            } else {
                // Handle database insert error
                echo json_encode(["status" => "error", "message" => "Error inserting mark: " . mysqli_error($conn)]);
            }
        } else {
            // User not logged in
            echo json_encode(["status" => "error", "message" => "User not logged in"]);
        }
    } else {
        // Required data not provided in the POST request
        echo json_encode(["status" => "error", "message" => "Invalid request data"]);
    }
} else {
    // Invalid request method
    echo json_encode(["status" => "error", "message" => "Invalid request method"]);
}

?>