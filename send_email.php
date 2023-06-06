<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["Name"];
  $address = $_POST["address"];
  $email = $_POST["Email"];
  $Phone = $_POST["Phone"];
  $Bedrooms1 = $_POST["Bedrooms1"];
  $Bedrooms2 = $_POST["Bedrooms2"];
  $message = $_POST["Message"];

  // Set recipient email address
  $to = 'info@hostaretreats.com';

  // Set subject
  $subject = 'New form submission';

  // Set email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/html\r\n";

  // Construct the email body
  $body = "<h2>New Form Submission</h2>
           <p><strong>Name:</strong> $name</p>
           <p><strong>Email:</strong> $address</p>
           <p><strong>Email:</strong> $Phone</p>
           <p><strong>Email:</strong> $Bedrooms1</p>
           <p><strong>Email:</strong> $Bedrooms2</p>
           <p><strong>Message:</strong> $message</p>";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo 'Email sent successfully.';
  } else {
    echo 'Unable to send email. Please try again.';
  }
}
?>