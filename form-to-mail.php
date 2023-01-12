<?php
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject=$_POST['subject'];
  $message = $_POST['message'];

  // Set recipient email and subject
  $to = "np4979@gmail.com";

  // Build email message
  $email_message = "Name: $name\n";
  $email_message .= "Email: $email\n";
  $subject_message .="Subject: $subject\n";
  $email_message .= "Message:\n$message\n";

  // Set headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send email
  mail($to, $subject, $email_message, $headers);
?>