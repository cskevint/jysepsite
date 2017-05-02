<?php

require_once('globals.php');

$page = array(
    'url' => $website_url."/true-friendship",
    'title' => "What is True Friendship?",
    'description' => "Friendships are at the core of the Junior Youth Spiritual Empowerment Program. We would like to share some of the lessons we’ve learned over the years.",
    'image' => "img/topic-2-full_fb.jpg"
);

$page_og_url = $page['url'];
$page_og_title = $page['title'];
$page_og_description = $page['description'];
$page_og_image = $page['image'];

require_once('header.php');

?>

<main class="site-body">
    <article class="topic pri-1">
        <header class="topic-header">
            <div class="section-inner">
                <h1 class="topic-heading">What is True Friendship?</h1>
                <span class="metadata">Posted October 16, 2015 - 4 min read</span>

                <?= share_this($page) ?>

                <div class="triangles">
                    <svg class="triangle tri_svg" id="topic_mosaic" xmlns="http://www.w3.org/2000/svg" width="591" height="413" viewBox="0 0 591 413" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-209.000000, -244.000000)" class="fill">
                                <g transform="translate(504.500000, 450.500000) scale(-1, 1) translate(-504.500000, -450.500000) translate(209.000000, 244.000000)">
                                    <path d="M441.91 136.97L369.03 136.97 405.47 68.86 441.91 136.97 441.91 136.97Z" opacity="0.2"/>
                                    <path d="M257.41 206.07L184.53 206.07 220.97 137.97 257.41 206.07 257.41 206.07Z" opacity="0.2"/>
                                    <path d="M184.53 206.07L111.65 206.07 148.09 137.97 184.53 206.07 184.53 206.07Z" opacity="0.2"/>
                                    <path d="M293.85 275.07L220.97 275.07 257.41 206.96 293.85 275.07 293.85 275.07Z" opacity="0.2"/>
                                    <path d="M590.2 137.05L517.32 137.05 553.76 68.95 590.2 137.05 590.2 137.05Z" opacity="0.5"/>
                                    <path d="M479.12 68.19L406.24 68.19 442.68 0.08 479.12 68.19 479.12 68.19Z" opacity="0.2"/>
                                    <path d="M478.73 206.21L405.85 206.21 442.29 138.1 478.73 206.21 478.73 206.21Z" opacity="0.5"/>
                                    <path d="M442.59 137.05L479.03 68.95 515.47 137.05 442.59 137.05Z" opacity="0.8"/>
                                    <path d="M258.56 206.96L331.44 206.96 295 275.07 258.56 206.96Z" opacity="0.8"/>
                                    <path d="M111.65 206.96L184.53 206.96 148.09 275.07 111.65 206.96Z" opacity="0.8"/>
                                    <path d="M294.85 137.86L367.73 137.86 331.29 205.96 294.85 137.86Z" opacity="0.5"/>
                                    <path d="M73.91 136.97L146.79 136.97 110.35 205.07 73.91 136.97Z" opacity="0.5"/>
                                    <path d="M259.41 344.55L332.29 344.55 295.85 412.65 259.41 344.55Z" opacity="0.5"/>
                                    <path d="M331.67 343.55L258.79 343.55 295.23 275.44 331.67 343.55 331.67 343.55Z" opacity="0.8"/>
                                    <path d="M72.91 136.29L0.03 136.29 36.47 68.19 72.91 136.29 72.91 136.29Z" opacity="0.8"/>
                                    <path d="M517.47 137.72L590.35 137.72 553.91 205.83 517.47 137.72Z" opacity="0.2"/>
                                    <path d="M0.03 137.86L72.91 137.86 36.47 205.96 0.03 137.86Z" opacity="0.2"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>

            </div>
        </header>
        <section class="site-section topic-intro">
            <div class="section-inner">
                <div class="content-block">
                    <p>Friendships are essential to creating better communities. But in many neighborhoods, friendships have eroded and we barely know our neighbors. Most people will agree that things must change; however, change is not easy. In the face of obstacles, it’s easy to give up.</p>
                    <p>This is where friends step in.</p>
                    <p>How many times have you avoided crisis or accomplished something you thought impossible thanks to the support of a friend? Our friends can help us unlock the potential to create powerful change in our communities despite the obstacles that might come in our way.</p>
                    <a href="#articleStart" class="btn_clear"></i></a>
                </div>
            </div>
        </section>
        <section class="site-section section_video">
            <div class="section-inner">
                <div class="fluidVidContainer">
                    <div class="fluidVidContainer-overlay is-toocontrasty">
                        <img src="img/video-overlay-truefriendship.png" alt="The Boys of Bollinwood" class="video-thumb">
                        <button class="btn_play js-vidPlay" data-vidID="143646425">
                            <span class="icon icon-play"><i class="fa fa-play"></i></span>
                            <span class="video-title">The Boys of Bollinwood<span class="video-duration">4 min 12 sec</span></span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <div class="content-block" id="articleStart">
            <p>Friendships are at the core of the Junior Youth Spiritual Empowerment Program. We would like to share some of the lessons we’ve learned over the years.</p>
        </div>
        <div class="content-block">
            <div class="menu_jumpto">
                <h3 class="jumpto-heading">Jump to</h3>
                <ul class="jumpto-items">
                    <li class="jumpto-item"><a href="#service" class="jumpto-link">Friendship and Service</a></li>
                    <li class="jumpto-item"><a href="#neighborhood" class="jumpto-link">A Neighborhood of Friends</a></li>
                </ul>
            </div>
        </div>
        <figure class="content-image is-fullsize">
            <img src="img/topic-2-full.jpg" alt="">
        </figure>
        <section class="site-section" id="service">
            <div class="section-inner">
                <div class="content-block">
                    <header class="section-header no-indent">
                        <h2 class="section-heading">Friendship and Service</h2>
                    </header>
                    <p>There is something special about sharing an experience. By studying, working, and striving together, we build special bonds.</p>
                    <p>When people volunteer together, they are bound by a powerful common purpose — improving their community. Through their conversations and their work, they learn about their community and the gifts of its members. Because everyone wants to achieve the same goal, they cheer each other on, help each other, and make sure that everyone is cared for.</p>
                    <p>Becoming a mentor for the Junior Youth Spiritual Empowerment Program is a wonderful way to serve your community. Members help each other become better at nurturing their younger peers. Putting the wellbeing of others before themselves, mentors measure the effectiveness of their efforts in a loving and supportive environment. Through serving their community, they create friendships outside their usual circles — school, work, and family — making their lives richer.</p>
                </div>
            </div>
        </section>
        <section class="site-section" id="neighborhood">
            <div class="section-inner">
                <div class="content-block">
                    <header class="section-header no-indent">
                        <h2 class="section-heading">A Neighborhood of Friends</h2>
                    </header>
                    <p>Who wouldn’t love to live close to their best friends? But instead of waiting for our friends to move closer, we can become friends with our neighbors.</p>
                    <p>We would do anything for our friends; but would we do the same for our neighbors? Most of us have been taught that we should be kind to our neighbors, or even to love them. In other words, we are asked to be their true friends.</p>
                    <figure class="content-image is-halfsize">
                        <img src="img/topic-2-half.jpg" alt="">
                    </figure>
                    <p>What would it look like if you were friends with your current neighbors? Leaving your apartment in the morning would look so different if you were friends with everyone who crossed your path. No doubt we would also see a whole other side to each person. “Cranky” old men and women would turn into elders eager to help us while “spoiled” and “annoying” children would become sources of joy and energy, and “sullen” adults would become hardworking and perseverant, inspiring us to push harder.</p>
                    <p class="clear">Only your neighbors know what it’s like to live in your community — from insulation problems, water heater issues, and the cracks in the walls. This shared knowledge can be leveraged to mobilize and engage everyone in improving living conditions. The same goes for addressing social issues, too. Children, teens, adults, and elders can all become involved.</p>
                    <figure class="content-image is-halfsize">
                        <img src="img/topic-2-half-2.jpg" alt="">
                    </figure>
                    <p>As mentors of the Junior Youth Spiritual Empowerment Program, we don’t only assist teens. Our groups meet regularly to discuss the challenges everyone in our neighborhood faces. Then we reach out to adults, teenagers, and children to resolve the problems. Volunteering with our neighbors creates a sense of shared purpose that allows us to become close friends. The obstacles in our lives feel temporary and we feel like we can improve our community. We feel hopeful because obstacles become opportunities for us to come together and discover how to overcome them. In this manner, we work slowly but steadily towards a better future for everyone in the neighborhood.</p>

                    <?= share_this($page) ?>
                </div>
            </div>
        </section>
    </article>
    <nav class="paging section-inner">
        <ul class="paging-items content-block">
            <li class="paging-item pri-2" <?=hide_page($three_questions)?>>
                <a href="three-questions" class="paging-link" rel="prev">
                    <img src="img/topic-1-half.jpg" alt="" class="paging-img">
                    <div class="paging-content">
                        <h5 class="paging-heading">Three questions you need to ask yourself</h5>
                        <span class="btn_clear">Read more <i class="fa fa-angle-double-right"></i></span>
                    </div>
                </a>
            </li>
            <li class="paging-item pri-3" <?=hide_page($get_involved)?>>
                <a href="get-involved" class="paging-link" rel="next">
                    <img src="img/topic-3-half.jpg" alt="" class="paging-img">
                    <div class="paging-content">
                        <h5 class="paging-heading">Get involved</h5>
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
