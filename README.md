# SMTP Email Sender

## This is a PHP script that demonstrates how to send an email via SMTP with authentication and SSL or STARTTLS.
Requirements

    PHP 5.6 or newer
    
    PHPMailer library

Usage

    Download and install the PHPMailer library.
    Include the PHPMailerAutoload.php file in your PHP script.
    Replace the placeholder values in the script with your own email credentials and SMTP server details.
    Set the desired values for the $from, $to, $subject, and $message variables.
    Execute the script to send the email.

Notes

    The script uses the PHPMailer library to send the email via SMTP.
    The $smtpPort variable can be set to 465 for SSL or 587 for STARTTLS.
    The $from variable can be set to a custom email address to change the "From" address of the email.
