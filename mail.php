<?php
// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email (website owner's email)
    $to = 'mariaelena.cossio@outlook.com';

    // Create the email headers
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Compose the email message to the owner
    $email_message_owner = "Name: $name\n";
    $email_message_owner .= "Email: $email\n";
    $email_message_owner .= "Subject: $subject\n";
    $email_message_owner .= "Message:\n$message";

    // Send the email to the owner
    $success_owner = mail($to, "Contact Form Submission: $subject", $email_message_owner, $headers);

    if ($success_owner) {
        // Send a confirmation email to the user
        $user_email = $email; // User's email
        $confirmation_message = "Thank you for contacting us. We will get back to you soon.";
        $success_user = mail($user_email, "Confirmation: $subject", $confirmation_message, $headers);
        
        // Display a success message
        if ($success_user) {
            echo 'Emails sent successfully!';
        } else {
            echo 'Confirmation email could not be sent.';
        }
    } else {
        echo 'Email to website owner could not be sent.';
    }
} else {
    echo 'Form was not submitted.';
}
?>
