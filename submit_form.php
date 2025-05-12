<!-- filepath: c:\Users\Kasutaja\Documents\Coursera\NewWebsite2025\submit_form.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address
    $to = "daisy.leming@gmail.com"; 
    $headers = "From: $name <no-reply@example.com>\r\n";
    $headers .= "Reply-To: $name\r\n";

    // Email subject and body
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "You have received a new message from $name.\n\n";
    $email_body .= "Message:\n$message";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>