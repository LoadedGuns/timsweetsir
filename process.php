<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "timsweetsir@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    $headers = "From: $name <$email>" . "\r\n";

    mail($to, $subject, $message, $headers);
    echo "Thank you for contacting us! We will get back to you shortly.";
} else {
    echo "Something went wrong. Please try again later.";
}
?>
