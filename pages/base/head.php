<!DOCTYPE html>

<?php
$language = 'en';
$location = 'en_US';
$site_name = 'The Website';
$site_url = 'yourwebsite.com';
$title_pattern = ' | The Website';
$author = 'Author Name |';
$site_color = '#000000';
$twitter_company = '@username';
$twitter_author = '@wearedakio';
$facebook_id = '000000000';
$facebook_author = 'https://www.facebook.com/wearedakio/';
$analytics_developer = 'UA-85063001-X';
$analytics_client = 'UA-00000000-0';
$google_site = '0000000000';
$pinterest_site = '0000000000000';
$protocol = 'http'; // http | https

// Do not change
$year = gmdate("Y");
$current_location = basename($_SERVER["SCRIPT_FILENAME"]);

?>


<html lang="<?php echo $language; ?>">

<head>
    <!--meta must have-->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow" />
    <meta name="googlebot-news" content="all" />
    <meta name="googlebot" content="all" />
    <meta name="HandheldFriendly" content="True">
    <meta name="SLURP" content="all">
    <meta name="MSNBOT" content="all">
    <meta name="teoma" content="all">
    <meta name="google-site-verification" content="<?php echo $google_site; ?>" />
    <meta name="p:domain_verify" content="<?php echo $pinterest_site; ?>" />

    <!--meta info-->
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="date" content="<?php echo $year; ?>" />
    <meta name="author" content="<?php echo $author; ?>" />
    <meta name='generator' content='<?php echo $author; ?>'>
    <meta name="application-name" content="<?php echo $site_name; ?>">

    <!--meta Location-->
    <!--Only use if needed http://www.geo-tag.de/generator/en.html
            <meta name="geo.region" content="CO" />
            <meta name="geo.placename" content="Bogot&aacute;" />
            <meta name="geo.position" content="4.65357;-74.061354" />
            <meta name="ICBM" content="4.65357, -74.061354" />
            -->

    <!--Open Graph data -->
    <meta property="fb:app_id" content="<?php echo $facebook_id; ?>" />
    <meta property="og:title" content="<?php echo $title . $title_pattern; ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:url" content="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/facebook-preview.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="<?php echo $location; ?>">
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="article:author" content="<?php echo $facebook_author; ?>" />

    <!--Google+ data-->
    <meta itemprop="description" content="<?php echo $description; ?>">
    <meta itemprop="name" content="<?php echo $title . $title_pattern; ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo $twitter_company; ?>">
    <meta name="twitter:creator" content="<?php echo $twitter_author; ?>">
    <meta name="twitter:title" content="<?php echo $title, $title_pattern; ?>">
    <meta name="twitter:description" content="<?php echo $description; ?>">
    <meta name="twitter:image" content="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/twitter-preview.jpg">
    <meta name="twitter:image:src" content="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/twitter-preview.jpg">
    <meta name="twitter:image:width" content="870">
    <meta name="twitter:image:height" content="750">
    <meta name="twitter:image:alt" content="<?php echo $description; ?>">

    <!-- Windows 8 and Phone-->
    <meta name="msapplication-TileImage" content="/static/meta-img/favicon.png">
    <meta name="msapplication-TileColor" content="<?php echo $site_color; ?>" />
    <meta name="application-name" content="<?php echo $site_name; ?>" />
    <meta name="MobileOptimized" content="320">
    <meta name="msapplication-navbutton-color" content="<?php echo $site_color; ?>">

    <!-- IE11 tiles -->
    <meta name="msapplication-square150x150logo" content="/static/meta-img/tile.png" />
    <meta name="msapplication-wide310x150logo" content="/static/meta-img/tile-wide.png" />

    <!--Only use if needed
        <link rel="canonical" href="http://www.<?php echo $site_url; ?>" />
        -->

    <!--Apple meta Data-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-traslucent">

    <!--Theming-->
    <meta name="theme-color" content="<?php echo $site_color; ?>">
    <link rel="mask-icon" href="/static/meta-img/safari-pinned-tab.svg" color="<?php echo $site_color; ?>">

    <!--Apple Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="/static/meta-img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/static/meta-img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/static/meta-img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/static/meta-img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/static/meta-img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/static/meta-img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/static/meta-img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/static/meta-img/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/static/meta-img/apple-touch-icon-180x180.png">

    <!--Apple Load Image-->
    <link rel="apple-touch-startup-image" href="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/apple-touch-startup-image-320x460.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)">
    <link rel="apple-touch-startup-image" href="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)">
    <link rel="apple-touch-startup-image" href="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/apple-touch-startup-image-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
    <link rel="apple-touch-startup-image" href="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)">
    <link rel="apple-touch-startup-image" href="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/apple-touch-startup-image-1024x768.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)">
    <link rel="apple-touch-startup-image" href="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/apple-touch-startup-image-1536x2008.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)">
    <link rel="apple-touch-startup-image" href="<?php echo $protocol; ?>://www.<?php echo $site_url; ?>/static/meta-img/apple-touch-startup-image-2048x1496.png" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)">

    <!--Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="icon" type="image/png" href="/static/meta-img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/static/meta-img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/static/meta-img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/static/meta-img/android-chrome-192x192.png" sizes="192x192">

    <!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->

    <title>
        <?php echo $title . $title_pattern; ?>
    </title>

    <?php require 'links.php'; ?>
    <!--Google Analytics-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', '<?php echo $analytics_developer; ?>', 'auto');
        ga('create', '<?php echo $analytics_client; ?>', 'auto', 'CLIENT');
        ga('send', 'pageview');
        ga('CLIENT.send', 'pageview');
    </script>
</head>

<body>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId: '<?php echo $facebook_id; ?>',
                cookie: true,
                xfbml: true,
                version: 'v2.8'
            });
            FB.AppEvents.logPageView();
        };
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
