<!DOCTYPE html>
<html lang=" language ">
<head>
           
    <?php 
$title = 'Title' ; 
$site_name = 'The Website' ;
$site_url = 'yourwebsite.com' ; 
$description = 'Description' ; 
$keywords = 'keywords, divided, by, commas' ; 
$author = 'Author Name' ; 
$year = '2016' ;
$site_color = '#000000' ; 
      ?>
       
        <!--Meta must have-->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta name="robots" content="All" />
        <meta name="googlebot-news" content="all" />

        <!--Meta info-->
        <meta name="description" content="<?php echo $description ?>" />
        <meta name="keywords" content="<?php echo $keywords ?>" />
        <meta name="date" content="<?php echo $year ?>" />
        <meta name="author" content="<?php echo $author ?>" />

        <!--Open Graph data -->
        <meta property="og:title" content="<?php echo $title ?>" />
        <meta property="og:site_name" content="<?php echo $site_name ?>" />
        <meta property="og:url" content="http://www.<?php echo $site_url ?>" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://www.<?php echo $site_url ?>/facebook-preview.jpg" />
        <meta property="og:image:type" content="image/jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />

        <!--Google+ data-->
        <meta itemprop="name" content="<?php echo $title ?>">
        <meta itemprop="description" content="<?php echo $description ?>">
        <meta itemprop="image" content="http://www.<?php echo $site_url ?>/schema-preview.jpg">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@company_username">
        <meta name="twitter:title" content="<?php echo $title ?>">
        <meta name="twitter:description" content="<?php echo $description ?>">
        <meta name="twitter:creator" content="@author_username">
        <meta name="twitter:image:src" content="http://www.<?php echo $site_url ?>/twitter-preview.jpg">
        <meta name="twitter:image:width" content="870">
        <meta name="twitter:image:height" content="750">

        <!-- Win8 tile -->
        <meta name="msapplication-TileImage" content="favicon.png">
        <meta name="msapplication-TileColor" content="<?php echo $site_color ?>" />
        <meta name="application-name" content="<?php echo $site_name ?>" />

        <!-- IE11 tiles -->
        <meta name="msapplication-square150x150logo" content="tile.png" />
        <meta name="msapplication-wide310x150logo" content="tile-wide.png" />

        <!--
        <link rel="canonical" href="If needed" />
        <meta property="og:url" content="Canonical link"/>
    -->

        <!--Favicon-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/normalize.min.css" media="screen"/>
        <link rel="stylesheet" href="css/animate.min.css" media="screen"/>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen"/>
        
        <!--Main Stylesheet-->
        <link rel="stylesheet" href="css/main.min.css" media="screen"/>

        <!--[if lt IE 8]>
	    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	    <![endif]-->

        <title>
            <?php echo $title ?>
        </title>

        <!--jQuery-->
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

        <!--Resizing -->
        <script type="text/javascript" src="js/resize.js"></script>
    </head>

    <body>