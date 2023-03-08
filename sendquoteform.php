<?php
if(isset($_POST['submit'])){
    // Fetching values from the form
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $contact_name = $_POST['contact_name'];
    $reason = $_POST['reason'];

    // Email parameters
    $to = 'info@groupsecurity.ca';
    $subject = 'Inquiry from '.$company_name;
    $message = 'Company Name: '.$company_name."\r\n";
    $message .= 'Email: '.$email."\r\n";
    $message .= 'Phone: '.$phone."\r\n";
    $message .= 'Contact Name: '.$contact_name."\r\n";
    $message .= 'Reason for Inquiry: '.$reason."\r\n";

    // Headers
    $headers = 'From: '.$email."\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";

    // Sending email
    if(mail($to, $subject, $message, $headers)){
        echo '<p>Your inquiry has been sent successfully!</p>';
    } else{
        echo '<p>There was an error while sending the inquiry. Please try again later.</p>';
    }
}
?>