<?php
/**
 * Nettoie les données utilisateur pour éviter les injections XSS.
 */
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

/**
 * Redirige vers une page avec un message flash.
 */
function redirect($url, $message = null) {
    if ($message) {
        $_SESSION["flash_message"] = $message;
    }
    header("Location: $url");
    exit();
}

/**
 * Envoie un email (exemple simplifié avec PHPMailer).
 */
function sendEmail($to, $subject, $body) {
    // Configuration PHPMailer ici...
}
?>