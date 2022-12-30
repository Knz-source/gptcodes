<?php

// Replace these with your own email credentials
$username = 'your-email@example.com';
$password = 'your-email-password';

// Set up the SMTP server details
$smtpHost = 'smtp.example.com';
$smtpPort = 465; // or 587 for STARTTLS

// Set up the email details
$from = 'custom-from@example.com'; // Customize the "From" address
$to = 'recipient@example.com';
$subject = 'Test email via SMTP';
$message = 'This is a test email sent via SMTP with authentication and SSL/TLS.';

// Create a new PHPMailer object
$mail = new PHPMailer;

// Set the SMTP options
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = $smtpHost;
$mail->Port = $smtpPort;
$mail->Username = $username;
$mail->Password = $password;

// Set the other email options
$mail->setFrom($from, 'Your Name'); // Use the custom "From" address
$mail->addAddress($to);
$mail->Subject = $subject;
$mail->Body = $message;

// Send the email
if (!$mail->send()) {
    echo 'Error: '.$mail->ErrorInfo;
} else {
    echo 'Email sent!';
}

