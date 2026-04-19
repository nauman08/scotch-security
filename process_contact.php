<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["text-707"] ?? ''));
    $email = filter_var(trim($_POST["email-761"] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["tel-733"] ?? ''));
    $message = trim($_POST["textarea-648"] ?? '');

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: contact.php?status=error");
        exit;
    }

    $recipient = "salman.anjum@scotchsecurity.com";
    $subject = "New Contact from Scotch Security Website";

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    $email_headers = "From: $name <$email>";

    if (mail($recipient, $subject, $email_content, $email_headers)) {
        header("Location: contact.php?status=success");
    } else {
        header("Location: contact.php?status=server_error");
    }
} else {
    header("Location: contact.php");
}
