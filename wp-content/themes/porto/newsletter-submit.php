<?php

require_once('../../../wp-load.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $unisex = isset($_POST['unisex']) ? sanitize_text_field($_POST['unisex']) : '';
    $women = isset($_POST['women']) ? sanitize_text_field($_POST['women']) : '';
    $men = isset($_POST['men']) ? sanitize_text_field($_POST['men']) : '';
    $privacyConsent = isset($_POST['privacyConsent']) ? sanitize_text_field($_POST['privacyConsent']) : '';

    if (empty($email) || !is_email($email)) {
        echo json_encode(['status' => 'error', 'message' => 'Nieprawidłowy adres e-mail.']);
        exit;
    }

    if (empty($privacyConsent)) {
        echo json_encode(['status' => 'error', 'message' => 'Wymagana jest zgoda na przetwarzanie danych osobowych.']);
        exit;
    }

    // Here you can handle the form data, e.g., save it to the database or send an email

    echo json_encode(['status' => 'success', 'message' => 'Formularz został pomyślnie wysłany.']);
    exit;
}