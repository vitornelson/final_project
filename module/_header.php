<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <meta name="Author" content="Vitor Santos">
        <title><?php echo($ptitle); ?></title>
        <meta name="description" content="Web site about whitewater rafting, hiking and bicicle trips.">
        <meta name="viewport" content="width=device-width, initial=scale=1">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/default.css">
        <link rel="stylesheet" type="text/css" href="css/tablet.css">
        <link rel="stylesheet" type="text/css" href="css/phone.css">
        <!-- flexslider-->
        <link rel="stylesheet" href="slider_support/css/flexslider.css" type="text/css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="slider_support/jquery.flexslider.js"></script>

        <script type="text/javascript" charset="utf-8">
            $(window).load(function() {
                $('.flexslider').flexslider();
            });
        </script>
    </head>
    <body>
        <div id="main_content">
            <header>
                <div id="logo">
                    <!--logo and title-->
                    <img src="images/logo.png" alt="logoimage">
                    <h1> Salmon River Adventures</h1>
                </div>
                <nav id="menu">
                    <!--navigation bar-->
                    <ul id="menu_ul">
                        <li class="<?php echo $home; ?>"><a href="index.php">Home</a>
                            <ul class="submenu">
                                <li><a href="/index.html">Vitor's Page</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $adv; ?>">Adventures
                            <ul class="submenu">
                                <li><a href="whitewater.php">Whitewater</a></li>
                                <li><a href="hiking.php">Hiking</a></li>
                                <li><a href="bicicle.php">Bicicle trails</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $fm; ?>">Registration
                            <ul class="submenu">
                                <li><a href="form.php">Registration form</a></li>
                                <li><a href="prices.php">Plans and prices</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo $abu; ?>">About Us
                            <ul class="submenu">
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="river_guide.php">River Guide</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
