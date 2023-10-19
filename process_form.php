<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    
    $to = "nehalmicro29@gmail.com";
    
    $subject = "Contact Form Submission: $subject";
    
    $headers = "From: $email";
    
    $message_body = "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Message:\n$message";
    
    
    mail($to, $subject, $message_body, $headers);
    
   
    header("Location: thank_you.html"); 
    exit();
}
?>
