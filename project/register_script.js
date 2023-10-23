function togglePasswordVisibility(fieldId) {
    var passwordField = document.getElementById(fieldId);
    var eyeIcon = passwordField.nextElementSibling;

    if (passwordField.type === "password") {
        passwordField.type = "text";
        eyeIcon.innerHTML = "&#128064;"; // Show closed eye icon
    } else {
        passwordField.type = "password";
        eyeIcon.innerHTML = "&#128065;"; // Show open eye icon
    }
}