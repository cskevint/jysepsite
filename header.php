<? require_once('globals.php'); ?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">
<head>
    <title><?= $website_title ?></title>

    <!-- TODO csrf param -->
    <!--    <meta name="csrf-param" content="authenticity_token" />-->
    <!--    <meta name="csrf-token" content="pr/TU1QL50rgTSGYAU7d2K0xNUduMX0oLVG7ddmdO/IG8tgdzwsJP72jkoIEi+ITGN4Q5Q4PNkD93PuJahN1IQ==" />-->
    <meta charset="utf-8">
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
    <!--    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">-->
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="author" content="<?= $website_short_title ?>">
    <meta name="description" content="<?= $website_meta_description ?>">
    <meta name="keywords" content="<?= $website_meta_keywords ?>">

    <!-- TODO add fb admins -->
    <!--    <meta property="fb:admins" content="78200184" />-->
    <!--    <meta property="fb:admins" content="554440022" />-->

    <meta property="og:url" content="<?= $page_og_url ?>" />
    <meta property="og:title" content="<?= $page_og_title ?>" />
    <meta property="og:description" content="<?= $page_og_description ?>" />
    <meta property="og:site_name" content="<?= $website_title ?>"/>
    <meta property="og:image" content="<?= $page_og_image ?>" />
    <meta property="og:type" content="article" />

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="JYSEP">
    <meta name="application-name" content="JYSEP">

    <!--    <meta name="msapplication-tooltip" content="JYSEP">-->
    <!--    <meta name="msapplication-starturl" content="--><? //= $website_url ?><!--">-->
    <!--    <meta name="theme-color" content="#FF0000">-->
    <!--    <meta name="msapplication-TileColor" content="#CC0000">-->
    <!--    <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=5AABvr8G2m">-->
    <!--    <meta name="msapplication-config" content="/browserconfig.xml?v=5AABvr8G2m">-->

    <!--    <link rel="manifest" href="/manifest.json?v=5AABvr8G2m">-->

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/apple-touch-icon-precomposed.png">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152-precomposed.png?v=5AABvr8G2m">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180-precomposed.png?v=5AABvr8G2m">

    <link rel="icon" type="image/png" href="/favicon-16x16.png?v=5AABvr8G2m" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png?v=5AABvr8G2m" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-96x96.png?v=5AABvr8G2m" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-194x194.png?v=5AABvr8G2m" sizes="194x194">

    <link rel="icon" type="image/png" href="/android-chrome-192x192.png?v=5AABvr8G2m" sizes="192x192">

    <link rel="shortcut icon" href="/favicon.ico?v=5AABvr8G2m">

    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700|Lora:400,400italic' rel='stylesheet'
          type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" media="all" href="css/application.css"/>
    <!--    <script>(function() {-->
    <!--        var _fbq = window._fbq || (window._fbq = []);-->
    <!--        if (!_fbq.loaded) {-->
    <!--            var fbds = document.createElement('script');-->
    <!--            fbds.async = true;-->
    <!--            fbds.src = '//connect.facebook.net/en_US/fbds.js';-->
    <!--            var s = document.getElementsByTagName('script')[0];-->
    <!--            s.parentNode.insertBefore(fbds, s);-->
    <!--            _fbq.loaded = true;-->
    <!--        }-->
    <!--    })();-->
    <!--    window._fbq = window._fbq || [];-->
    <!--    window._fbq.push(['track', '6030258551627', {'value':'0.00','currency':'USD'}]);-->
    <!--    </script>-->
    <!--    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6030258551627&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>-->
    <!--    <script>(function() {-->
    <!--        var _fbq = window._fbq || (window._fbq = []);-->
    <!--        if (!_fbq.loaded) {-->
    <!--            var fbds = document.createElement('script');-->
    <!--            fbds.async = true;-->
    <!--            fbds.src = '//connect.facebook.net/en_US/fbds.js';-->
    <!--            var s = document.getElementsByTagName('script')[0];-->
    <!--            s.parentNode.insertBefore(fbds, s);-->
    <!--            _fbq.loaded = true;-->
    <!--        }-->
    <!--        _fbq.push(['addPixelId', '550390798443501']);-->
    <!--    })();-->
    <!--    window._fbq = window._fbq || [];-->
    <!--    window._fbq.push(['track', 'PixelInitialized', {}]);-->
    <!--    </script>-->
    <!--    <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=550390798443501&amp;ev=PixelInitialized" /></noscript>-->

</head>
<body class="c-home is-index">

<header class="site-header">
    <a href="index.php" class="site-logo" title="<?= $website_title ?>">
        <img src="img/logo.png" alt="" class="icon">
    </a>
    <a href="get-involved" class="btn_cta pri-1 js-scrollToAnchor">
        Get involved
    </a>
    <a href="<?= $facebook_page ?>" class="sm-link" target="_blank">
        <span class="icon icon-sm fb">
            <i class="fa fa-facebook"></i>
        </span>
        Join us on Facebook
    </a>
    <button class="btn_showMobileNav js-showMobileNav"><span></span></button>
    <nav class="site-nav">
        <ul>
            <li class="is-current"><a href="index">Home</a></li>
            <li>
                <a href="index#what_is_jysp" class="js-scrollToAnchor">What is the JYSEP?</a>
            </li>
            <li>
                <a href="index#what_motivates_us" class="js-scrollToAnchor">What Motivates Us</a>
            </li>
            <li class="slight-indent">
                <a href="three-questions">Three Questions To Ask Ourselves</a>
            </li>
            <li class="slight-indent">
                <a href="true-friendship">What Is True Friendship?</a>
            </li>
            <li class=" ">
                <a href="get-involved">Get Involved</a>
            </li>
        </ul>
        <a href="<?= $facebook_page ?>" class="sm-link" target="_blank">
            <span class="icon icon-sm fb">
                <i class="fa fa-facebook"></i>
            </span>
            Join us on Facebook
        </a>
    </nav>
</header>
