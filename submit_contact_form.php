<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get form inputs
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Perform any necessary form validation or data sanitization here
  
  // Email parameters
  $to = "ayushsolanki979@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message . "\n";
  $headers = "From: your-email@example.com"; // Replace with your own email address or domain

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    // Redirect the user to a thank you page or display a success message
    // header("Location: thank_you.php");
    // exit();
    echo "Thank you for your submission!";
  } else {
    // Failed to send email
    echo "Failed to send the form. Please try again.";
  }
}
?>
