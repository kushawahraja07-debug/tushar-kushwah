<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // 👇 Owner का Email यहां डालें
    $to = "tusharku509@gmail.com";  
    
    $headers = "From: ".$email."\r\n";
    $headers .= "Reply-To: ".$email."\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "📩 New Contact Form Submission\n\n";
    $body .= "👤 Name: $name\n";
    $body .= "📧 Email: $email\n";
    $body .= "📌 Subject: $subject\n";
    $body .= "💬 Message:\n$message\n";

    if(mail($to, $subject, $body, $headers)){
        echo "<script>alert('✅ Thank you $name! Your message has been sent.'); window.location.href='contact.html';</script>";
    } else {
        echo "<script>alert('❌ Sorry, your message could not be sent.'); window.location.href='contact.html';</script>";
    }
}
?>
