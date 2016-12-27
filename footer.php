<? require_once('globals.php'); ?>

<a name="get-involved"></a>
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
        <?= contact_form('bottom') ?>

        <a href="<?= $facebook_page ?>" class="sm-link" target="_blank">
            <span class="icon icon-sm fb">
                <i class="fa fa-facebook"></i>
            </span>
            Join us on Facebook
        </a>
        <small>© Copyright 2016. All rights reserved.</small>
    </div>
</footer>

</body>
</html>