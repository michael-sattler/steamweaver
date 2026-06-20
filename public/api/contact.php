<?php
/**
 * Contact form handler for the marketing homepage.
 * Accepts POST JSON or form-urlencoded name + email, sends notification mail.
 */

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

$contentType = $_SERVER['CONTENT_TYPE'] ?? '';
if (str_contains($contentType, 'application/json')) {
    $payload = json_decode(file_get_contents('php://input'), true) ?: [];
    $name = trim($payload['name'] ?? '');
    $email = trim($payload['email'] ?? '');
} else {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
}

if ($name === '' || $email === '') {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Name and email are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Please enter a valid email address.']);
    exit;
}

if (mb_strlen($name) > 200) {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Name is too long.']);
    exit;
}

$to = 'michael.sattler360@gmail.com';
$subject = 'Steamweaver contact form submission';
$body = "Someone reached out via the Steamweaver website.\n\n"
      . "Name: {$name}\n"
      . "Email: {$email}\n";

$fromDomain = $_SERVER['HTTP_HOST'] ?? 'steamweaver.com';
$fromDomain = preg_replace('/:\d+$/', '', $fromDomain);
$headers = [
    'From: Steamweaver Contact <noreply@' . $fromDomain . '>',
    'Reply-To: ' . $name . ' <' . $email . '>',
    'Content-Type: text/plain; charset=UTF-8',
];

$sent = mail($to, $subject, $body, implode("\r\n", $headers));

if (!$sent) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Unable to send your message. Please try again later.']);
    exit;
}

echo json_encode(['ok' => true]);
