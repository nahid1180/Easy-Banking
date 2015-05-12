<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />

        <title>Compare all banking tranction</title>

        <!--css for fonts-->
        <link href="<?php echo base_url() ?>fonts/stylesheet.css" rel="stylesheet"/>
        <!--css for bootstrp-->
        <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>css/bootstrap-theme.min.css" rel="stylesheet"/>
        <!--css for slider-->
        <link href="<?php echo base_url() ?>css/bootstrapTheme.css" rel="stylesheet"  />
        <link href="<?php echo base_url() ?>css/owl.carousel.css" rel="stylesheet"  />
        <link href="<?php echo base_url() ?>css/owl.theme.css" rel="stylesheet"  />
        <!--css for all browser page support-->
        <link href="<?php echo base_url() ?>css/normalize.css" rel="stylesheet"  />
        <!--css for manu-->
        <link href="<?php echo base_url() ?>SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/style_common.css" rel="stylesheet">
        <!--css for main page-->
        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet"  />

        <!--js for bootstarp-->
        <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="<?php echo base_url() ?>js/jquery-1.9.1.min.js"></script>
    </head>

    <body class="co-fluidntainer wrapper"> 
        <div>
            <!--code for header section-->
            <div class="header">
                <div class="header_color">
                    <img src="<?php echo base_url(); ?>img/logo.png" width="289">
                    <!--code for navbar-->
                    <div class="manu">
                        <!--<div class="navbar">-->
                        <div class="manu_box">
                            <div><a href="<?php echo base_url() ?>welcome/contact.html">Contact</a></div>
                            <div><a href="<?php echo base_url() ?>welcome/about.html">About</a></div>
                            <div><a href="<?php echo base_url(); ?>">Home</a></div>
                        </div>
                        <div class="time">
                            <script>
                                var d = new Date(); 
                                document.write (d.toDateString());    
                            </script>
                        </div>
                       
                    </div>

                </div>
                <!--end cod for navbar-->
                <div class=" header_color1"></div>
            </div>
        </div>
        <!--end code for header-->

        <!--start code for body-->
        <div class="body_wrapper">
            <?php echo $maincontent; ?>
        </div>
        <!--end code for body-->

        <!--start code for logo-->
        <!--<div class="social_bar">
            <div class="fb"><a href="https://www.facebook.com"><img src="<?php echo base_url(); ?>img/logo/facebook_logo1.gif"></a></div>
            <div class="tw"><a href="https://www.twitter.com"><img src="<?php echo base_url(); ?>img/logo/twitter.gif"></a></div>
            <div class="go"><a href="https://www.google-plus.com"><img src="<?php echo base_url(); ?>img/logo/gooogle.gif"></a></div>
        </div>-->

        <!--start code for footer-->
        <footer>
            <div class="footer0"></div>
            <div class="footer1">
                <div class="footer_text">&copy; Copyright 2014 all right protected. Design and develop by Nahid, Amirul & Rashed.</div>
            </div>
        </footer>
    </div>    
</body>
</html>
