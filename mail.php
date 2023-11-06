<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include the PHPMailer library

// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Set up the email server settings for Outlook.com
        $mail->isSMTP();
        $mail->Host = 'smtp-mail.outlook.com'; // SMTP server for Outlook.com
        $mail->SMTPAuth = true;
        $mail->Username = 'mariaelena.cossio@outlook.com'; // Your Outlook.com email address
        $mail->Password = 'Hassive1mar2.'; // Your Outlook.com password
        $mail->SMTPSecure = 'tls'; // Use TLS encryption
        $mail->Port = 587; // Port for Outlook.com SMTP

        // Set sender and recipient addresses
        $mail->setFrom('your-outlook-email@example.com', 'Your Name'); // Your Outlook.com email and name
        $mail->addAddress('mariaelena.cossio@outlook.com', 'Website Owner'); // Owner's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission: ' . $subject;
        $mail->Body = "Name: $name<br>Email: $email<br>Message: $message";

        // Send the email to the owner
        $mail->send();

        // Send a confirmation email to the person who filled out the form
        $mail->clearAddresses();
        $mail->addAddress($email, $name); // User's email
        $mail->Subject = 'Confirmation: ' . $subject;
        $mail->Body = "Thank you for contacting us. We will get back to you soon.";

        // Send the confirmation email
        $mail->send();

        // Display a success message
        echo 'Emails sent successfully!';
    } catch (Exception $e) {
        // Handle any errors that occur during sending
        echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    // Handle cases where the form was not submitted
    echo 'Form was not submitted.';
}
?>