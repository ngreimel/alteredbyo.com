<?php
/**
 * Altered By Obrycki - alteredbyo.com/contact.php
 *
 * @author      Neal Greimel <neal@greimel.us>
 * @copyright   Copyright (c) 2014 Neal Greimel (http://neal.greimel.us)
 * @version     $Id$
 */

date_default_timezone_set('America/Chicago');

// Send json header
header('Content-type: application/json');

// Validate parameters
$errors = array();
if (!isset($_REQUEST['name']) || empty($_REQUEST['name'])) {
  $errors['name'] = 'Please enter your name';
}
if (!isset($_REQUEST['email']) || empty($_REQUEST['email'])) {
  $errors['email'] = 'Please enter your email address';
}
if (!isset($_REQUEST['comment']) || empty($_REQUEST['comment'])) {
  $errors['comment'] = 'Please enter a comment';
}
// If this is set, just pretend to send
$robotForm = '' !== $_REQUEST['do-not-modify'];

if (count($errors)) {
  $response = array(
    'status' => 'failed',
    'message' => 'Missing required field' . (count($errors) > 1 ? 's' : '') . '. Please try again',
    'errors' => $errors,
  );
  die (json_encode($response));
}

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comment = $_REQUEST['comment'];

$now = new DateTime();
$headers = implode("\r\n", array(
  'MIME-Version: 1.0',
  'Content-type: text/html; charset=utf-8',
  'From: AlteredByO.com <no-reply@alteredbyo.com>',
  'Bcc: Kara Obrycki <kobrycki1@gmail.com>',
)) . "\r\n";
$to = "{$name} <{$email}>";
$subject = 'Contact AlteredByO.com';
$message = '<h2>Thank you for contacting us!</h2>
<p>We have received your message and will contact you shortly if it requires a response.</p>
<hr />
<p>On ' . $now->format('r') . ', ' . $name . ' wrote:<br />
<blockquote>' . nl2br(htmlentities($comment)) . '</blockquote></p>';

$success = $robotForm || mail($to, $subject, $message, $headers);
$response = array(
  'status' => $success ? 'success' : 'failed',
  'message' => $success ? '<strong>Thank you!</strong> Your message has been sent' : '<strong>Error</strong> There was an error sending your message, please try again',
);
echo json_encode($response);
