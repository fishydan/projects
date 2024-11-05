<?php
// Define the correct password (this should be securely hashed in a real app)
$correct_password = 'amralimaldives8480';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the entered password
    $entered_password = $_POST['password'];

    // Validate the password
    if ($entered_password === $correct_password) {
        // If the password is correct, display content
        header('Location: minecraft_content.php');
        exit();
    } else {
        // If the password is incorrect, show an error message
        echo "<script>alert('Incorrect password! Access denied.'); window.location.href='index.html';</script>";
    }
}
?>
