<?php

$website_url = "http://sanmateo.junioryouth.us";
$website_title = "San Mateo Junior Youth Spiritual Empowerment Program";
$website_short_title = "San Mateo JYSEP";

$program_address = "30 N Grant St<br>San Mateo, CA 94401";
$program_email = "sanmateojysep@gmail.com";
$program_phone = "(650) 999-0019";
$program_state = "California";
$program_location = "San Mateo County";

$website_short_description = "Inspiring young people, parents, and community members to work together toward a better world.";
$website_meta_description = "A global volunteer and mentoring program inspiring young people, parents, and community members to work together toward a better world. Over the past 10 years, the program has grown throughout ".$program_location;
$website_meta_keywords = "Junior Youth Spiritual Empowerment Program, Volunteer, Mentor, Middle School, Youth, Service, After School Program, Community, Spiritual, Religion, Social Action";
$website_about = "Serving the region for more than 10 years, the Junior Youth Spiritual Empowerment Program is a mentoring initiative that inspires young people, parents, and community members to work together toward a better world.";

$facebook_page = "https://www.facebook.com/sanmateojysep";

$contact_from_email = "core@sanmateo.junioryouth.us";

$page_og_url = $website_url;
$page_og_title = $website_title;
$page_og_description = $website_short_description;
$page_og_image = "";

$events = "<p><strong>Saturday, February 4, 2-3:45PM</strong><br/>Recreation Room @<br/>58 N El Camino Real<br/>San Mateo, CA 94401</p>";
#$events .= "<p><strong>Saturday, February 11, 10-11:45AM</strong><br/>Martin Luther King Center<br/>Social Room B<br>725 Monte Diablo Ave<br/>San Mateo, CA 94401</p>";

$true_friendship = false;
$three_questions = false;
$get_involved = true;

if(isset($_REQUEST['admin']) && $_REQUEST['admin'] == 'true') {
    $true_friendship = true;
    $three_questions = true;
    $get_involved = true;
}

$is_production = $_SERVER['HTTP_HOST'] == 'sanmateo.junioryouth.us';

?>