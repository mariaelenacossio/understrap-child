<?php
// Include WordPress functions, including wp_mail()
define('WP_USE_THEMES', false);
require('wp-load.php');

if (isset($_POST['submit'])) {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = esc_textarea($_POST['message']);

    // Recipient email (website owner's email)
    $to = 'mariaelena.cossio@outlook.com';

    // Compose the email headers
    $headers = "Content-Type: text/html\r\n";
    $headers .= "From: $name <$email>\r\n";

    // Call the custom wp_mail() function
    $success_owner = custom_wp_mail($to, "Contact Form Submission: $subject", $message, $headers);

    if ($success_owner) {
        // Send a confirmation email to the user
        $user_email = $email; // User's email
        $confirmation_message = "Thank you for contacting us. We will get back to you soon.";

        // Call the custom wp_mail() function for the user confirmation email
        $success_user = custom_wp_mail($user_email, "Confirmation: $subject", $confirmation_message, $headers);

        // Display a success message
        if ($success_user) {
            echo 'Emails sent successfully!';
        } else {
            echo 'Confirmation email could not be sent.';
        }
    } else {
        echo 'Email to website owner could not be sent.';
    }
}
?>
