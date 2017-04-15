<?php

$website_url = "http://chicago.junioryouth.us";
$website_title = "Chicago Junior Youth Spiritual Empowerment Program";
$website_short_title = "Chicago JYSEP";

$program_address = "";
$program_email = "chicago@junioryouth.us";
$program_phone = "(773) 609-5651";
$program_state = "Illinois";
$program_location = "Chicago";

$website_short_description = "Inspiring young people, parents, and community members to work together toward a better world.";
$website_meta_description = "A global volunteer and mentoring program inspiring young people, parents, and community members to work together toward a better world. Over the past 10 years, the program has grown throughout ".$program_location;
$website_meta_keywords = "Junior Youth Spiritual Empowerment Program, Volunteer, Mentor, Middle School, Youth, Service, After School Program, Community, Spiritual, Religion, Social Action";
$website_about = "Serving the region for more than 10 years, the Junior Youth Spiritual Empowerment Program is a mentoring initiative that inspires young people, parents, and community members to work together toward a better world.";

$facebook_page = "https://www.facebook.com/chicagojysep";

$contact_from_email = "chicago@junioryouth.us";
$add_to_spreadsheet = true;

$page_og_url = $website_url;
$page_og_title = $website_title;
$page_og_description = $website_short_description;
$page_og_image = "";

$events = "";
#$events .= "<p><strong>Saturday, February 11, 10-11:45AM</strong><br/>Martin Luther King Center<br/>Social Room B<br>725 Monte Diablo Ave<br/>Chicago, CA 94401</p>";

$true_friendship = false;
$three_questions = false;
$get_involved = true;

if(isset($_REQUEST['admin']) && $_REQUEST['admin'] == 'true') {
    $true_friendship = true;
    $three_questions = true;
    $get_involved = true;
}

$is_production = $_SERVER['HTTP_HOST'] == 'chicago.junioryouth.us';

?>