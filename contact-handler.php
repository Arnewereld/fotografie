<?php
/**
 * Contact Form Handler
 * Processes contact form submissions
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get and sanitize input
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Naam is verplicht';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is verplicht';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Ongeldig email adres';
    }
    
    if (empty($message)) {
        $errors[] = 'Bericht is verplicht';
    }
    
    if (!empty($errors)) {
        echo json_encode(['success' => false, 'errors' => $errors]);
        exit;
    }
    
    // Here you can add email sending functionality
    // Example using mail() function:
    /*
    $to = 'info@arnemeevis.nl';
    $subject = 'Nieuw Contact Formulier Bericht';
    $body = "Naam: $name\nEmail: $email\n\nBericht:\n$message";
    $headers = "From: $email\r\nReply-To: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true, 'message' => 'Bericht succesvol verzonden!']);
    } else {
        echo json_encode(['success' => false, 'errors' => ['Kon bericht niet verzenden']]);
    }
    */
    
    // For now, just return success
    echo json_encode(['success' => true, 'message' => 'Bericht succesvol verzonden!']);
} else {
    echo json_encode(['success' => false, 'errors' => ['Ongeldige request methode']]);
}
?>
