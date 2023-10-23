<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <script src="login_script.js" defer></script>
    <style>
        /* Add CSS for the eye icon */
        .eye-icon {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Login</h2>

        <?php
        session_start();
        if (isset($_SESSION['login_error'])) {
            echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
            unset($_SESSION['login_error']); // Clear the session variable after displaying the error message
        }
        ?>

        <form action="process_login.php" method="post" onsubmit="return validatePassword()">
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Enter password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility('password')">&#128065;</span>
            </div>
            <button type="submit">Login</button>
        </form>

        <div class="register-link">
            Don't have an account? <a href="register.php">Register</a>
        </div>
    </div>
</body>

</html>