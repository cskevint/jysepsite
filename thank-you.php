<?php

require_once('globals.php');

$page = array(
    'url' => $website_url."/thank-you",
    'title' => "Thank you!",
    'description' => "We are looking for young adults to become mentors for the Junior Youth Spiritual Empowerment Program. No special skills are needed; the only requirement is an eagerness to help create better neighborhoods. There are three steps to become a mentor. Read on to find out how to get started.",
    'image' => "img/topic-3-full_fb.jpg"
);

$page_og_url = $page['url'];
$page_og_title = $page['title'];
$page_og_description = $page['description'];
$page_og_image = $page['image'];

require_once('header.php');

?>

<main class="site-body">
    <article class="topic pri-3">
        <header class="topic-header">
            <div class="section-inner">
                <h1 class="topic-heading">Thank you!</h1>
                <p><strong>We look forward to meeting you soon!</strong></p>

                <div class="triangles">
                    <svg class="triangle tri_svg" id="topic_mosaic" xmlns="http://www.w3.org/2000/svg" width="591" height="413" viewBox="0 0 591 413" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-209.000000, -244.000000)" class="fill"><g transform="translate(504.500000, 450.500000) scale(-1, 1) translate(-504.500000, -450.500000) translate(209.000000, 244.000000)"><path d="M441.91 136.97L369.03 136.97 405.47 68.86 441.91 136.97 441.91 136.97Z" opacity="0.2"/><path d="M257.41 206.07L184.53 206.07 220.97 137.97 257.41 206.07 257.41 206.07Z" opacity="0.2"/><path d="M184.53 206.07L111.65 206.07 148.09 137.97 184.53 206.07 184.53 206.07Z" opacity="0.2"/><path d="M293.85 275.07L220.97 275.07 257.41 206.96 293.85 275.07 293.85 275.07Z" opacity="0.2"/><path d="M590.2 137.05L517.32 137.05 553.76 68.95 590.2 137.05 590.2 137.05Z" opacity="0.5"/><path d="M479.12 68.19L406.24 68.19 442.68 0.08 479.12 68.19 479.12 68.19Z" opacity="0.2"/><path d="M478.73 206.21L405.85 206.21 442.29 138.1 478.73 206.21 478.73 206.21Z" opacity="0.5"/><path d="M442.59 137.05L479.03 68.95 515.47 137.05 442.59 137.05Z" opacity="0.8"/><path d="M258.56 206.96L331.44 206.96 295 275.07 258.56 206.96Z" opacity="0.8"/><path d="M111.65 206.96L184.53 206.96 148.09 275.07 111.65 206.96Z" opacity="0.8"/><path d="M294.85 137.86L367.73 137.86 331.29 205.96 294.85 137.86Z" opacity="0.5"/><path d="M73.91 136.97L146.79 136.97 110.35 205.07 73.91 136.97Z" opacity="0.5"/><path d="M259.41 344.55L332.29 344.55 295.85 412.65 259.41 344.55Z" opacity="0.5"/><path d="M331.67 343.55L258.79 343.55 295.23 275.44 331.67 343.55 331.67 343.55Z" opacity="0.8"/><path d="M72.91 136.29L0.03 136.29 36.47 68.19 72.91 136.29 72.91 136.29Z" opacity="0.8"/><path d="M517.47 137.72L590.35 137.72 553.91 205.83 517.47 137.72Z" opacity="0.2"/><path d="M0.03 137.86L72.91 137.86 36.47 205.96 0.03 137.86Z" opacity="0.2"/></g></g></g></svg>
                </div>

            </div>
        </header>
    </article>
    <section class="site-section section_about" id="what_is_jysp">
        <div class="section-inner">
            <div class="content-block">
                <div class="triangles">
                    <div class="triangle tri_img tri_1"><img src="img/tri-about-1.png" alt=""></div>
                    <div class="triangle tri_img tri_2"><img src="img/tri-about-2.png" alt=""></div>
                    <div class="triangle tri_img tri_3"><img src="img/tri-about-3.png" alt=""></div>
                    <svg class="triangle tri_svg" id="about_mosaic" xmlns="http://www.w3.org/2000/svg" width="287px" height="907px" viewBox="0 0 287 907" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-54.000000, -2711.000000)" opacity="0.8"><g transform="translate(54.000000, 2710.000000)"><path d="M97 1L287 1 192 181 97 1Z" fill="#3ED6C0" transform="translate(192.000000, 91.000000) rotate(-180.000000) translate(-192.000000, -91.000000) "/><path d="M97 548L287 548 192 728 97 548Z" fill="#F9A51B"/><path d="M3 728L193 728 98 908 3 728Z" fill="#F0F7F5"/><path d="M0 185L190 185 95 365 0 185Z" fill="#B791C3" transform="translate(95.000000, 275.000000) rotate(-180.000000) translate(-95.000000, -275.000000) "/></g></g></g></svg>
                </div>
                <header class="section-header">
                    <h2 class="section-heading">What is the JYSEP?</h2>
                </header>
                <p class="teaser">The Junior Youth Spiritual Empowerment Program trains teens and young adults to mentor younger peers aged 11 to 15.</p>
                <p>Each week, mentors and junior youth put their heads together to study materials based around moral and spiritual concepts and talk about how to navigate a complex world, resist negative forces in their lives, and promote social progress.</p>
                <p>Trainings and ongoing support help teens and young adults learn and grow as mentors for the program. In the groups they are helped to start, they engage participants in meaningful conversations, arts and crafts, and youth-led service projects. Mentors also build friendships with parents and gain practical skills such as lesson planning and coordination.</p>
                <p>Inspired and sponsored by <a href="https://www.bahai.us/" target="_blank">the Baha’i Faith</a>, the program thrives through the participation and contribution of people from diverse backgrounds.</p>
            </div>
        </div>
    </section>
</main>

<?php
require_once('footer.php');
?>