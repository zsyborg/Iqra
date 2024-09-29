<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['contact']));
    $message = htmlspecialchars(trim($_POST['query']));


    // Email configuration
    $to = "info@iqra.tech"; // Replace with your email address
    $headers = "From: $name - <$contact>" . "\r\n" .
               "Reply-To: no-reply@iqra.tech" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Compose email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>
