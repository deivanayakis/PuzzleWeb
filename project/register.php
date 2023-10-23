<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="register_script.js" defer></script>
    <title>Registration Page</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <h2>Registration Form</h2>
        <form action="process_registration.php" method="post">
            <div class="form-group">
                <label for="first_name">First Name:</label><span class="required">*</span>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label><span class="required">*</span>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label><span class="required">*</span>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="qualification">Qualification:</label><span class="required">*</span>
                <select id="qualification" name="qualification" required>
                    <option value="select">Select</option>
                    <option value="10th">10th</option>
                    <option value="12th">12th</option>
                    <option value="ug">UG</option>
                    <option value="pg">PG</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label><span class="required">*</span>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label><span class="required">*</span>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label><span class="required">*</span>
                <input type="password" id="password" name="password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility('password')">&#128065;</span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label><span class="required">*</span>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <span class="eye-icon" onclick="togglePasswordVisibility('confirm_password')">&#128065;</span>
            </div>    
            

            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
        <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>

</html>