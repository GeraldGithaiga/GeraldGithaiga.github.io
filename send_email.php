<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "your_email@example.com"; // Change this to your email address

    // Set email subject
    $subject = "New Contact Form Submission";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";

    // Set headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // Redirect to the form page if accessed directly
    header("Location: index.html");
    exit();
}
?>
