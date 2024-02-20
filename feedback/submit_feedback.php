<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // You can perform further validation and sanitization here

    // Store the feedback in a database or file
    // For demonstration purposes, let's just append it to a text file
    $feedbackData = "Name: $name\nEmail: $email\nFeedback: $feedback\n\n";
    file_put_contents("feedback.txt", $feedbackData, FILE_APPEND);

    // Send a confirmation email to the user (optional)
    $subject = "Thank you for your feedback";
    $message = "Dear $name,\n\nThank you for providing your feedback!";
    $headers = "From: your@example.com\r\n";
    mail($email, $subject, $message, $headers);

    // Respond to the client
    echo "Feedback submitted successfully. Thank you!";
} else {
    header("HTTP/1.1 405 Method Not Allowed");
    echo "Method not allowed.";
}
?>
