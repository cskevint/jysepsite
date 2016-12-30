<?php

require_once('globals.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$to = $program_email;
$subject = "SM JYSEP: ".$name;
if(strlen($phone) > 0) {
    $body = "Name: ".$name."<br/>Phone: ".$phone;
} elseif(strlen($email) > 0) {
    $body = "Name: ".$name."<br/>Email: ".$email;
}

$from_header = "From: San Mateo JYSEP <".$contact_from_email.">\r\n";
$passed_honeypot = strlen($_REQUEST['lastname']) == 0;

$result = array('success' => false);
if($passed_honeypot && strlen($body) > 0 && mail($to, $subject, $body, $from_header)) {
    $result = array('success' => true);
}
header('Content-type: application/json');
echo json_encode($result);

?>