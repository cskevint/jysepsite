<?php

function share_this($page) {
?>
    <div class="sm-container">
        <h6 class="sm-heading">Share this</h6>
        <ul class="sm-links">
            <li>
                <a href="http://twitter.com/share?url=<?= $page['url'] ?>&amp;text=%22<?= $page['title'] ?>%22 by <?= $website_short_title ?>" target="_blank" class="sm-link">
                    <span class="icon icon-sm tw"><i class="fa fa-twitter"></i></span>
                </a>
            </li>
            <li>
                <a href="http://www.facebook.com/sharer.php?u=<?= $page['url'] ?>" target="_blank" class="sm-link">
                    <span class="icon icon-sm fb"><i class="fa fa-facebook-square"></i></span>
                </a>
            </li>
            <!--        <li>-->
            <!--            <a class="sm-link" href="mailto:?body=Friendships%20are%20essential%20to%20creating%20better%20communities.%20But%20in%20many%20neighborhoods%2C%20friendships%20have%20eroded%20and%20we%20barely%20know%20our%20neighbors.%20Most%20people%20will%20agree%20that%20things%20must%20change...%20https%3A%2F%2Fwww.upliftchapelboro.org%2Ftrue-friendship&amp;subject=What%20is%20True%20Friendship%3F">-->
            <!--                <span class="icon icon-sm em"><i class="fa fa-envelope"></i></span>-->
            <!--            </a>-->
            <!--        </li>-->
        </ul>
    </div>
<?php
}

?>


