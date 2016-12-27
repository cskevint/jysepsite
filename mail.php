<?php

require_once('globals.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$to = $program_email;
$subject = 'Contact Us';
if(strlen($phone) > 0) {
    $body = "Phone: ".$phone;
} elseif(strlen($email) > 0) {
    $body = "Email: ".$email;
}

$from_header = "From: ".$name." <".$contact_from_email.">\r\n";
$passed_honeypot = strlen($_REQUEST['lastname']) == 0;

$result = array('success' => false);
if($passed_honeypot && strlen($body) > 0 && mail($to, $subject, $body, $from_header)) {
    $result = array('success' => true);
}
header('Content-type: application/json');
echo json_encode($result);

?>