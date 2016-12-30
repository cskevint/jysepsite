<?php

$website_url = "http://sanmateo.junioryouth.us";
$website_title = "San Mateo Junior Youth Spiritual Empowerment Program";
$website_short_title = "San Mateo JYSEP";
$website_short_description = "Inspiring young people, parents, and community members to work together toward a better world.";
$website_meta_description = "A global volunteer and mentoring program inspiring young people, parents, and community members to work together toward a better world. Over the past 10 years, the program has grown throughout Chapel Hill, Carrboro, Durham, Cary, Raleigh.";
$website_meta_keywords = "Triangle, Junior Youth Spiritual Empowerment Program, Chapel Hill, Carrboro, Durham, Cary, Raleigh, Volunteer, Mentor, Middle School, Youth, Service, After School Program, Community, Spiritual, Religion, Social Action, Chapelboro";
$website_about = "Serving the region for more than 10 years, the Junior Youth Spiritual Empowerment Program is a mentoring initiative that inspires young people, parents, and community members to work together toward a better world.";

$facebook_page = "https://www.facebook.com/sanmateojysep";

$program_address = "30 N Grant St<br>San Mateo, CA 94401";
$program_email = "sanmateojysep@gmail.com";
$program_phone = "(650) 999-0019";
$program_state = "California";
$program_location = "San Mateo County";

$contact_from_email = "core@sanmateo.junioryouth.us";

$page_og_url = $website_url;
$page_og_title = $website_title;
$page_og_description = $website_short_description;
$page_og_image = "";

$true_friendship = false;
$three_questions = false;
$get_involved = true;

if($_REQUEST['admin'] == 'true') {
    $true_friendship = true;
    $three_questions = true;
    $get_involved = true;
}

?>