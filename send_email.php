<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $recipient = $_POST['recipient'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: webmaster@example.com\r\n";
    $headers .= "Reply-To: webmaster@example.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    $mailSent = mail($recipient, $subject, $message, $headers);

    // Redirect to confirmation page
    if ($mailSent) {
        header("Location: sent.html");
        exit();
    } else {
        header("Location: error.html");
        exit();
    }
}
?>
