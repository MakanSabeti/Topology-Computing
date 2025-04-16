<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $name = $_POST['name'];
     $email = $_POST['email'];
     $message = $_POST['message'];

     $to = "Makansabeti@yahoo.ca"; // Replace with your email address
     $subject = "New Message from $name";
     $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
     $headers = "From: $email";

     if (mail($to, $subject, $body, $headers)) {
         header("Location: thankyou.html");
     } else {
         echo "Error sending email.";
     }
 }
 ?>
 ```