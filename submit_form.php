<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactMethod = $_POST['contact-method'];
    $message = $_POST['message'];
    $services = implode(", ", $_POST['services']);

    // Email address where you want to receive the form submissions
    $to = "tu.ho9428@gmail.com";

    // Email subject
    $subject = "New Form Submission";

    // Email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Preferred Contact Method: $contactMethod\n";
    $email_message .= "Message: $message\n";
    $email_message .= "Interested Services: $services\n";

    // Send email
    mail($to, $subject, $email_message);

    // Redirect back to the form page
    header("Location: your-form-page.php");
    exit();
}
?>
