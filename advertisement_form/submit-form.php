<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form fields and remove whitespace
    $ad_type = trim($_POST['ad-type']);
    $ad_location = trim($_POST['ad-location']);
    $ad_duration = trim($_POST['ad-duration']);
    $ad_price = trim($_POST['ad-price']);
    $ad_description = trim($_POST['ad-description']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $company = trim($_POST['company']);
    $website = trim($_POST['website']);
    $industry = trim($_POST['industry']);
    $budget = trim($_POST['budget']);

    // Set the admin email address
    $admin_email = "subedipradip199@gmail.com";

    // Set the email subject
    $subject = "New Advertisement Request from $name";

    // Build the email body
    $body = "Type of Ad: $ad_type\n\n";
    $body .= "Location of Ad: $ad_location\n\n";
    $body .= "Duration of Ad: $ad_duration\n\n";
    $body .= "Price of Ad: $ad_price\n\n";
    $body .= "Description of Ad: $ad_description\n\n";
    $body .= "Name: $name\n\n";
    $body .= "Email: $email\n\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Company: $company\n\n";
    $body .= "Website: $website\n\n";
    $body .= "Industry: $industry\n\n";
    $body .= "Budget: $budget\n\n";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send the email
    if(mail($admin_email, $subject, $body, $headers)) {
        // If the email was sent successfully, redirect the user to a thank you page
        header("Location: thankyou1.php");
        exit();
    } else {
        // If there was an error sending the email, show an error message
        $error_message = "There was a problem sending your request. Please try again later.";
    }
}
?>
