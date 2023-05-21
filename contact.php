<?php
// Make sure we have a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Check for errors
    $errors = [];
    
    if (empty($name)) {
        $errors['name'] = 'Name is required';
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'A valid email is required';
    }

    if (empty($message)) {
        $errors['message'] = 'Message is required';
    }

    // If we have errors, send them back
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }

    // If we got this far, try to send the email
    $to = 'your-email@example.com';
    $subject = 'New contact form submission';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo json_encode(['success' => true, 'message' => 'Your message has been sent successfully.']);
    } else {
        echo json_encode(['success' => false, 'errors' => ['An error occurred while trying to send your message.']]);
    }
}
?>