<?php
require 'includes/db_connect.php';

if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Insert into database
    try {
        $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        // Send email notification
        $to = "your.email@example.com";
        $subject = "New Contact Form Submission";
        $email_message = "You have received a new message from your portfolio website.\n\n";
        $email_message .= "Name: $name\n";
        $email_message .= "Email: $email\n";
        $email_message .= "Message:\n$message\n";
        
        $headers = "From: webmaster@yourportfolio.com\r\n";
        $headers .= "Reply-To: $email\r\n";

        mail($to, $subject, $email_message, $headers);

        // Redirect to thank you page
        header("Location: thank-you.html");
        exit();
    } catch(PDOException $e) {
        die("Database error: " . $e->getMessage());
    }
} else {
    header("Location: index.php");
    exit();
}
?>