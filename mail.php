<?php

require_once('globals.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$to = $program_email;
$subject = 'Contact Us';
if(strlen($phone) > 0) {
    $body = "Phone: ".$phone;
} else {
    $body = "Email: ".$email;
}

$from_header = "From: ".$website_short_title." <".$program_email.">\r\n";

$result = array('success' => false);
if($_REQUEST['lastname'] == '' && mail($to, $subject, $body, $from_header)) {
    $result = array('success' => true);
}
header('Content-type: application/json');
echo json_encode($result);

?>