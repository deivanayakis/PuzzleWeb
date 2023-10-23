<?php
session_start();
include("db_connection.php"); // Include your database connection code

if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login page if user is not logged in
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_SESSION['email'];
    if (isset($_POST['inputFirstName'])) {
        
        $newFirstName = mysqli_real_escape_string($conn, $_POST["inputFirstName"]);
        $updateFirstNameQuery = "UPDATE student SET Firstname='$newFirstName' WHERE Email='$email'";
        if (mysqli_query($conn, $updateFirstNameQuery)) {
            echo "";
        } else {
            echo "Error updating First Name: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['inputLastName'])) {
        
        $newFirstName = mysqli_real_escape_string($conn, $_POST["inputLastName"]);
        $updateFirstNameQuery = "UPDATE student SET Lastname='$newFirstName' WHERE Email='$email'";
        if (mysqli_query($conn, $updateFirstNameQuery)) {
            echo "";
        } else {
            echo "Error updating Last Name: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['inputDob'])) {
        
        $newFirstName = mysqli_real_escape_string($conn, $_POST["inputDob"]);
        $updateFirstNameQuery = "UPDATE student SET DOB='$newFirstName' WHERE Email='$email'";
        if (mysqli_query($conn, $updateFirstNameQuery)) {
            echo "";
        } else {
            echo "Error updating Date of Birth: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['inputQualification'])) {
        
        $newFirstName = mysqli_real_escape_string($conn, $_POST["inputQualification"]);
        $updateFirstNameQuery = "UPDATE student SET Qualification='$newFirstName' WHERE Email='$email'";
        if (mysqli_query($conn, $updateFirstNameQuery)) {
            echo "";
        } else {
            echo "Error updating Qualification: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['inputPhone'])) {
        
        $newFirstName = mysqli_real_escape_string($conn, $_POST["inputPhone"]);
        $updateFirstNameQuery = "UPDATE student SET Phoneno='$newFirstName' WHERE Email='$email'";
        if (mysqli_query($conn, $updateFirstNameQuery)) {
            echo "";
        } else {
            echo "Error updating Phone number: " . mysqli_error($conn);
        }
    }

    if (isset($_POST['deleteAccount'])) {
        // Delete user account from the database
        $deleteQuery = "DELETE FROM student WHERE Email='$email'";
        if (mysqli_query($conn, $deleteQuery)) {
            session_destroy(); // Destroy the session to log the user out
            header("Location: index.html"); // Redirect to index.html after successful deletion
            exit();
        } else {
            echo "Error deleting account: " . mysqli_error($conn);
        }
    }

    // Apply similar logic for other fields (Last Name, Email, Phone Number) here
}


$email = $_SESSION['email'];
$query = "SELECT * FROM student WHERE Email = '$email'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profilestyles.css"> <!-- Link to your CSS file for styling -->
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h2>User Profile</h2>
        <label>Email:</label> <span id="email"><?php echo $row['Email']; ?></span><br>
        <input type="text" name="inputFirstName" id="inputFirstName" style="display: none;">
        <button id="submitFirstName" style="display: none;">Submit</button><br>

        <form id="firstNameForm" method="post" action="profile.php">
        <label>First Name:</label>
        <span id="firstName"><?php echo $row['Firstname']; ?></span>
        <input type="text" name="inputFirstName" id="inputFirstName" style="display: none;">
        <button id="submitFirstName" style="display: none;">Submit</button><br>
        </form>
        
        <form id="LastNameForm" method="post" action="profile.php">
        <label>Last Name:</label>
        <span id="lastName"><?php echo $row['Lastname']; ?></span>
        <input type="text" name="inputLastName" id="inputLastName" style="display: none;">
        <button id="submitLastName" style="display: none;">Submit</button><br>
        </form>

        <form id="DOBForm" method="post" action="profile.php">
        <label>Date of Birth:</label>
        <span id="dob"><?php echo $row['DOB']; ?></span>
        <input type="date" name="inputDob" id="inputDob" style="display: none;">
        <button id="submitDob" style="display: none;">Submit</button><br>
        </form>

        <form id="QualifyForm" method="post" action="profile.php">
        <label>Qualification:</label>
        <span id="qualification"><?php echo $row['Qualification']; ?></span>
        <input type="text" name="inputQualification" id="inputQualification" style="display: none;">
        <button id="submitQualification" style="display: none;">Submit</button><br>
        </form>

        <form id="PhonenoForm" method="post" action="profile.php">
        <label>Phone No.:</label>
        <span id="phoneno"><?php echo $row['Phoneno']; ?></span>
        <input type="text" name="inputPhone" id="inputPhone" style="display: none;">
        <button id="submitPhone" style="display: none;">Submit</button><br>
        </form>

        
        <!-- Add other user details as needed -->

        <!-- Edit and Delete buttons -->
        <button id="editButton">Edit your data</button>
        <form id="deleteForm" method="post">
            <button id=deleteButton type="submit" name="deleteAccount">Delete Account</button>
        </form>
    </div>

    
<script>
    document.getElementById("editButton").addEventListener("click", function() {
        var inputFields = document.querySelectorAll("input");
        var submitButtons = document.querySelectorAll("button");
        
        inputFields.forEach(function(input) {
            input.style.display = "inline-block";
        });
        
        submitButtons.forEach(function(button) {
            button.style.display = "inline-block";
        });
        
        var spans = document.querySelectorAll("span");
        spans.forEach(function(span) {
            span.style.display = "none";
        });
        
        // Disable the edit button after enabling edit mode
        document.getElementById("editButton").disabled = true;
    });

    document.getElementById("submitFirstName").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("firstNameForm").submit();
    });

    document.getElementById("submitLastName").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("LastNameForm").submit();
    });

    document.getElementById("submitDob").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("DOBForm").submit();
    });

    document.getElementById("submitQualification").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("QualifyForm").submit();
    });

    document.getElementById("submitPhone").addEventListener("click", function(event) {
        event.preventDefault();
        document.getElementById("PhoneNoForm").submit();
    });
    
    // Add similar event listeners for other submit buttons if needed
</script>
</body>

</html>