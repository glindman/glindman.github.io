<?php
  $first_name = $_Post['firstname'];
  $last_name = $_Post['lastname'];
  $visitor_email = $_Post['email'];
  $message = $_Post['message'];

  $email_from = 'message@gabelindman.com';

  $email_subject = "Design Inquiry";

  $email_body = "User First Name: $first_name.\n".
      "User Last Name: $last_name.\n".
        "User Email: $visitor_email.\n".
          "User Message: $message.\n";

  $to = "gabe.lindman94@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: ../index.html");
?>
