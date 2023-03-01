<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $to = "info@groupsecurity.ca";
        $subject = "Form submission";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        if (mail($to, $subject, $message, $headers)) {
            echo "The form data was sent successfully.";
        } else {
            echo "An error occurred and the form data could not be sent.";
        }        
    }
?>