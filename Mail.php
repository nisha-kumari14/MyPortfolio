<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Set recipient email address
    $to = "sushant7280@gmail.com"; // Replace with your email address

    // Set email subject
    $email_subject = "Contact Form Submission: $subject";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message";

    // Set additional email headers
    $headers = "From: $email";

    // Send the email
    mail($to, $email_subject, $email_message, $headers);

    // Redirect back to your website with a success message
    header("Location: thankyou.html"); // Create a thank you page

} else {
    // Handle invalid request or direct access to the script
    echo "Invalid request.";
}
?>
