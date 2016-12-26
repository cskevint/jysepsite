<? require_once('globals.php'); ?>

<footer class="site-footer">
    <div class="section-inner">
        <div class="site-footer-content">
            <h6 class="site-footer-heading">About <?= $website_title ?></h6>
            <p><?= $website_about ?></p>
            <address class="site-footer-address">
                <p><?= $program_address ?></p>
                <a href="mailto:<?= $program_email ?>"><?= $program_email ?></a>
                <a href="tel:<?= $program_phone ?>"><?= $program_phone ?></a>
            </address>
        </div>
        <form class="form_contact" id="contactFormBottom">
            <fieldset class="form-group">
                <legend class="form-heading">Get Involved</legend>
                <p class="form-intro">Want to know more? Drop us a note and we'll get in touch with all the details.</p>
                <p class="form-message">We’ve received your inquiry and will respond to you within 24 hours. We look
                    forward to connecting soon.</p>
                <div class="form-item">
                    <label for="contactFormBottom_name" class="form-item-label">Your name</label>
                    <input id="contactFormBottom_name" name="contactFormBottom_name" type="text" class="form-item-field"
                           placeholder="What’s your name?">
                </div>
                <div class="form-item is-hidden js-phone">
                    <label for="contactFormBottom_phone" class="form-item-label">Phone Number*</label>
                    <a href="#form" class="btn_formFieldSwitcher js-formFieldSwitcher" tabindex="-1"
                       data-formID="contactFormBottom">or <span>Contact me by email</span></a>
                    <input id="contactFormBottom_phone" name="contactFormBottom_phone" type="tel"
                           class="form-item-field" placeholder="What’s your number? (123) 456-7890">
                </div>
                <div class="form-item is-hidden js-email">
                    <label for="contactFormBottom_email" class="form-item-label">Email address*</label>
                    <a href="#form" class="btn_formFieldSwitcher js-formFieldSwitcher" tabindex="-1"
                       data-formID="contactFormBottom">or <span>Contact me by phone</span></a>
                    <input id="contactFormBottom_email" name="contactFormBottom_email" type="email"
                           class="form-item-field" placeholder="What’s your email?">
                </div>
                <button class="btn_form btn_contactFormBottom js-submitContactForm" data-formID="contactFormBottom">
                    Contact me!
                </button>
                <span class="form-note">* We will never share your information with third parties. <a
                        href="privacy-policy">Privacy policy</a></span>
            </fieldset>
        </form>

        <a href="<?= $facebook_page ?>" class="sm-link" target="_blank">
            <span class="icon icon-sm fb">
                <i class="fa fa-facebook"></i>
            </span>
            Join us on Facebook
        </a>
        <small>© Copyright 2016. All rights reserved.</small>
    </div>
</footer>


<script src="js/application.js"></script>

</body>
</html>