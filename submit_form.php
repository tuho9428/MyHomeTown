<?php


require 'C:\xampp\htdocs\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\phpmailer\src\SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contactMethod = $_POST["contact-method"];
    $message = $_POST["message"];
    $services = implode(", ", $_POST["services"]);

    // Instantiate PHPMailer
    $mail = new PHPMailer(true); // Passing `true` enables exceptions

    try {
        //Server settings
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'tuhocoder@gmail.com'; // SMTP username
        $mail->Password = 'qats ybwl cddj cuum'; // SMTP password
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to

        //Recipients
        $mail->setFrom($email, $name); // Sender's email address and name
        $mail->addAddress('tuhocoder@gmail.com'); // Add recipient email address

        //Content
        $mail->isHTML(false); // Set email format to plain text
        $mail->Subject = 'New Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\nPreferred Contact Method: $contactMethod\nMessage: $message\nInterested Services: $services";

        $mail->send(); // Send the email
        echo 'Thank you for your submission!';
    } catch (Exception $e) {
        echo 'Oops! Something went wrong and we couldn\'t send your message.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo; // Uncomment for debugging
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: contact.html");
    exit();
}
?>
