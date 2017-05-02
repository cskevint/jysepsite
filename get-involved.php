<?php

$page = array(
    'url' => $website_url."/get-involved",
    'title' => "Get Involved",
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
                <h1 class="topic-heading">Get Involved</h1>
                <span class="metadata">Posted December 29, 2016 - 3 min read</span>

                <?= share_this($page) ?>

                <div class="triangles">
                    <svg class="triangle tri_svg" id="topic_mosaic" xmlns="http://www.w3.org/2000/svg" width="591" height="413" viewBox="0 0 591 413" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-209.000000, -244.000000)" class="fill"><g transform="translate(504.500000, 450.500000) scale(-1, 1) translate(-504.500000, -450.500000) translate(209.000000, 244.000000)"><path d="M441.91 136.97L369.03 136.97 405.47 68.86 441.91 136.97 441.91 136.97Z" opacity="0.2"/><path d="M257.41 206.07L184.53 206.07 220.97 137.97 257.41 206.07 257.41 206.07Z" opacity="0.2"/><path d="M184.53 206.07L111.65 206.07 148.09 137.97 184.53 206.07 184.53 206.07Z" opacity="0.2"/><path d="M293.85 275.07L220.97 275.07 257.41 206.96 293.85 275.07 293.85 275.07Z" opacity="0.2"/><path d="M590.2 137.05L517.32 137.05 553.76 68.95 590.2 137.05 590.2 137.05Z" opacity="0.5"/><path d="M479.12 68.19L406.24 68.19 442.68 0.08 479.12 68.19 479.12 68.19Z" opacity="0.2"/><path d="M478.73 206.21L405.85 206.21 442.29 138.1 478.73 206.21 478.73 206.21Z" opacity="0.5"/><path d="M442.59 137.05L479.03 68.95 515.47 137.05 442.59 137.05Z" opacity="0.8"/><path d="M258.56 206.96L331.44 206.96 295 275.07 258.56 206.96Z" opacity="0.8"/><path d="M111.65 206.96L184.53 206.96 148.09 275.07 111.65 206.96Z" opacity="0.8"/><path d="M294.85 137.86L367.73 137.86 331.29 205.96 294.85 137.86Z" opacity="0.5"/><path d="M73.91 136.97L146.79 136.97 110.35 205.07 73.91 136.97Z" opacity="0.5"/><path d="M259.41 344.55L332.29 344.55 295.85 412.65 259.41 344.55Z" opacity="0.5"/><path d="M331.67 343.55L258.79 343.55 295.23 275.44 331.67 343.55 331.67 343.55Z" opacity="0.8"/><path d="M72.91 136.29L0.03 136.29 36.47 68.19 72.91 136.29 72.91 136.29Z" opacity="0.8"/><path d="M517.47 137.72L590.35 137.72 553.91 205.83 517.47 137.72Z" opacity="0.2"/><path d="M0.03 137.86L72.91 137.86 36.47 205.96 0.03 137.86Z" opacity="0.2"/></g></g></g></svg>
                </div>

            </div>
        </header>
        <section class="site-section topic-intro">
            <div class="section-inner">
                <div class="content-block">
                    <p><strong>Our mission:</strong> We strive to awaken young people to their own potential, and educate them to use their talents to help others. We assist them to identify the needs of their community and to create opportunities to serve their neighbors, family, and friends.</p>
                    <p>The Junior Youth Spiritual Empowerment Program is founded on the idea that spiritual education helps people achieve their highest potential. The curriculum is inspired by the teachings of the Baha'i Faith but it is not religious in nature.</p>
                    <a href="#articleStart" class="btn_clear"></i></a>
                </div>
            </div>
        </section>
        <figure class="content-image is-fullsize">
            <img src="img/topic-3-full.jpg" alt="">
        </figure>
        <div class="content-block" id="articleStart">
            <p>We are looking for young adults to become mentors for the Junior Youth Spiritual Empowerment Program. No special skills are needed; the only requirement is an eagerness to help create better neighborhoods. There are three steps to become a mentor. Read on to find out how to get started.</p>
        </div>
        <div class="content-block">
            <div class="menu_jumpto">
                <h3 class="jumpto-heading">Jump to</h3>
                <ul class="jumpto-items">
                    <li class="jumpto-item"><a href="#step_1" class="jumpto-link">Step 1: Come to an interest meeting</a></li>
                    <li class="jumpto-item"><a href="#step_2" class="jumpto-link">Step 2: Get training and experience</a></li>
                    <li class="jumpto-item"><a href="#step_3" class="jumpto-link">Step 3: Start a junior youth group</a></li>
                </ul>
            </div>
        </div>
        <section class="site-section" id="step_1">
            <div class="section-inner">
                <div class="content-block">
                    <header class="section-header no-indent">
                        <h2 class="section-heading">Step 1: Come to an interest meeting</h2>
                    </header>
                    <p>If you want to learn more about becoming a mentor, an interest meeting is the perfect place to start. At our interest meetings, which last about one to two hours, you’ll learn more about the program, the role of a mentor, the training process, and review the curriculum materials. RSVP to a nearby interest meeting using the <a href="#get-involved">form below</a>.</p>
                    <?=$events?>
                </div>
            </div>
        </section>
        <section class="site-section" id="step_2">
            <div class="section-inner">
                <div class="content-block">
                    <header class="section-header no-indent">
                        <h2 class="section-heading">Step 2: Get training and experience</h2>
                    </header>
                    <figure class="content-image is-halfsize">
                        <img src="img/topic-3-half.jpg" alt="">
                    </figure>
                    <p>After attending an interest meeting, you’re invited to join a training course that explores topics like the potential of young people, the purpose of the program, and personal character development that helps mentors better assist their groups. With the help of a coordinator, you'll be trained in the Junior Youth Spiritual Empowerment Program course materials, learn cooperative games to share with your groups, and spend time in the field helping an existing junior youth group.</p>
                    <p class="clear"><strong>Training Schedule</strong><br/>
                        The free training is offered on a normal and an intensive schedule. Intensive training usually lasts 6 weekends, and weekly training can typically be completed in a semester. The next trainings will begin soon after the interest meetings and will be held in many locations throughout the area.</p>
                </div>
            </div>
        </section>
        <section class="site-section" id="step_3">
            <div class="section-inner">
                <div class="content-block">
                    <header class="section-header no-indent">
                        <h2 class="section-heading">Step 3: Start a junior youth group</h2>
                    </header>
                    <p>After entering the training process, a program coordinator will assist you to create a new junior youth group, or to support an existing group. There are typically 3 mentors to work with each group of 7-12 participants (aged 11-14). We try to organize it this way so you can share ideas and support fellow mentors. </p>
                    <figure class="content-image is-halfsize">
                        <img src="img/topic-3-half-2.jpg" alt="">
                    </figure>
                    <p><strong>Components of a group</strong>
                    <ul>
                        <li>You and the members of the group will study books and stories that explore aspects of service to the community and the development of your own potential. </li>
                        <li>Arts and crafts are fully integrated to help deepen the group’s understanding on these topics.</li>
                        <li>Service projects help the group to change their communities for the better. You will help the junior youth plan and carry out these service projects.</li>
                        <li>Healthy recreation is integral to the group. You’ll spend time playing sports or board games, watching a movie, or just hanging out.</li>
                    </ul>
                    <p class="clear">RSVP to a nearby interest meeting using the form below.</p>

                    <?= share_this($page) ?>
                </div>
            </div>
        </section>
    </article>
    <nav class="paging section-inner">
        <ul class="paging-items content-block">
            <li class="paging-item pri-1" <?=hide_page($true_friendship)?>>
                <a href="true-friendship" class="paging-link" rel="prev">
                    <img src="img/topic-2-half.jpg" alt="" class="paging-img">
                    <div class="paging-content">
                        <h5 class="paging-heading">What is true friendship?</h5>
                        <span class="btn_clear">Read more <i class="fa fa-angle-double-right"></i></span>
                    </div>
                </a>
            </li>
            <li class="paging-item pri-2" <?=hide_page($three_questions)?>>
                <a href="three-questions" class="paging-link" rel="next">
                    <img src="img/topic-1-half.jpg" alt="" class="paging-img">
                    <div class="paging-content">
                        <h5 class="paging-heading">Three questions you need to ask yourself</h5>
                        <span class="btn_clear">Read more <i class="fa fa-angle-double-right"></i></span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>

</main>

<?php
require_once('footer.php');
?>