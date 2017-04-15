<?php

require_once('globals.php');

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$sheet = "\n\nhttps://goo.gl/ny7g4m";

$to = $program_email;
$subject = "New contact: ".$name;
if(strlen($phone) > 0) {
    $body = "Name: ".$name."\nPhone: ".$phone.$sheet;
} elseif(strlen($email) > 0) {
    $body = "Name: ".$name."\nEmail: ".$email.$sheet;
}

$from_header = "From: San Mateo JYSEP <".$contact_from_email.">\r\n";
$passed_honeypot = strlen($_REQUEST['lastname']) == 0;

$result = array('success' => false);

if($passed_honeypot && strlen($body) > 0 && mail($to, $subject, $body, $from_header)) {
    $result = array('success' => true);
}
header('Content-type: application/json');
echo json_encode($result);

if ($add_to_spreadsheet) {
    $row = array(date("m/d/y"), $name, $email, $phone);

    require_once __DIR__.'/vendor/autoload.php';

    putenv('GOOGLE_APPLICATION_CREDENTIALS=/home/doopr/service-account.json');
    $client = new Google_Client();
    $client->useApplicationDefaultCredentials();
    $client->addScope(Google_Service_Sheets::SPREADSHEETS);

    $service = new Google_Service_Sheets($client);

    $spreadsheetId = '1AAQp8dIRmSAHntpArPdZfkVZ9EQ7jupMxsAb4lN16mg';
    $range = 'Contact List!A2:D';

    $values = array($row);
    $body = new Google_Service_Sheets_ValueRange(array(
        'values' => $values
    ));

    $valueInputOption = 'USER_ENTERED';
    $params = array(
        'valueInputOption' => $valueInputOption
    );

    $result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
}

?>
