<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    // Email Configuration
    $to = "stojanaleksandrovic@gmail.com";
    $subject = "New Contact Form Submission from $name"; 
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
} else {
    header("index.html");
    exit();
}
?>