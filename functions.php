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

function contact_form($location) {
?>
    <form class="form_contact">
        <fieldset class="form-group">
            <legend class="form-heading">Get Involved</legend>
            <p class="form-intro">Want to know more? Drop us a note and we'll get in touch with all the details.</p>
            <p class="form-message">We’ve received your inquiry and will respond to you within 24 hours. We look forward to connecting soon.</p>
            <div class="form-item">
                <label for="name-<?=$location?>" class="form-item-label">Your name</label>
                <input id="name-<?=$location?>" name="name" type="text" class="form-item-field name" placeholder="What’s your name?">
            </div>
            <div class="form-item">
                <label for="lastname-<?=$location?>" class="form-item-label">Your last name</label>
                <input id="lastname-<?=$location?>" name="lastname" type="text" class="form-item-field lastname" placeholder="What’s your last name?">
            </div>
            <div class="form-item">
                <label for="phone-<?=$location?>" class="form-item-label">Phone Number*</label>
                <a href="#" class="btn_formFieldSwitcher" tabindex="-1">or <span>Contact me by email</span></a>
                <input id="phone-<?=$location?>" name="phone" type="tel" class="form-item-field phone" placeholder="What’s your number? (123) 456-7890">
            </div>
            <div class="form-item">
                <label for="email-<?=$location?>" class="form-item-label">Email address*</label>
                <a href="#" class="btn_formFieldSwitcher" tabindex="-1">or <span>Contact me by phone</span></a>
                <input id="email-<?=$location?>" name="email" type="email" class="form-item-field email" placeholder="What’s your email?">
            </div>
            <button type="submit" class="btn_form">Contact me!</button>
            <span class="form-note">* We will never share your information with third parties. <a href="privacy-policy">Privacy policy</a></span>
        </fieldset>
    </form>
<?php
}

?>
<?php

function hide_page($value) {
    if(!$value) {
        return "style='display:none;'";
    }
    return "";
}

?>


