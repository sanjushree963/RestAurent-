<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["rname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $date = $_POST["rdate"];
    $time = $_POST["time"];
    $people = $_POST["people"];

    // Compose email message
    $to = "your_email@example.com"; // Change this to your email
    $subject = "Booking Confirmation";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Date: $date\n";
    $message .= "Time: $time\n";
    $message .= "Number of People: $people\n";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
