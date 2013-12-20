<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aviators, http://themes.byaviators.com">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

    <!--[if lt IE 9]>
    <script src="assets/js/html5.js" type="text/javascript"></script>
    <![endif]-->

    <meta name='robots' content='noindex,nofollow' />

    <link rel='stylesheet' id='font-css' href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C300&#038;subset=latin%2Clatin-ext&#038;ver=3.6' type='text/css' media='all' />


    <link rel='stylesheet' id='revolution-fullwidth' href='<?php echo base_url()?>template/assets/libraries/rs-plugin/css/fullwidth.css' type='text/css' media='all' />
    <link rel='stylesheet' id='revolution-settings' href='<?php echo base_url()?>template/assets/libraries/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css' href='<?php echo base_url()?>template/assets/libraries/bootstrap/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-responsive-css' href='<?php echo base_url()?>template/assets/libraries/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-responsive-css' href='<?php echo base_url()?>template/css/style.css' type='text/css' media='all' />

    <link rel='stylesheet' id='pictopro-normal-css' href='<?php echo base_url()?>template/assets/icons/pictopro-normal/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='justvector-web-font-css' href='<?php echo base_url()?>template/assets/icons/justvector-web-font/stylesheet.css' type='text/css' media='all' />
    <link rel='stylesheet' id='chosen-css' href='<?php echo base_url()?>template/assets/libraries/chosen/chosen.css' type='text/css' media='all' />

    <link rel='stylesheet' id='aviators-css' href='<?php echo base_url()?>template/assets/css/jquery.bxslider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='properta-css' href='<?php echo base_url()?>template/assets/css/properta.css' type='text/css' media='all' />

    <script type='text/javascript' src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
    <script type='text/javascript' src='assets/js/aviators-settings.js'></script>
    <script type='text/javascript' src='assets/libraries/chosen/chosen.jquery.min.js'></script>
    <script type='text/javascript' src='assets/libraries/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='assets/libraries/rs-plugin/js/jquery.themepunch.plugins.min.js'></script>

    <title>Contact Us</title>
</head>

<body class="home page page-template">
    <?php include( "top.php") ?>

    <div id="content" class="clearfix">

        <div class="container" style="margin-top:30px;">
            <ul class="breadcrumb">
                <li>
                    <a href="<?php echo base_url()?>">Home</a>
                    <span class="divider">/</span>
                </li>
                <li class="active">Hubungi Kami</li>
            </ul>
            <div class="row">

                <div id="main" class="span9">
                    <article class="clearfix page type-page">
                        <div class="entry-content">
                            <h2 class="sent-title">Send us a message</h2>
                            <p>For further information about our services, please contact our customer support through this following form.</p>

                            <script>
                                $(function() {
                                    $('.contact-form').submit(function() {
                                        $('input').val('');
                                        $('textarea').val('');
                                        $('.sent-title').text('Thank You, Your message is sent !');
                                        return false;
                                    });
                                })
                            </script>

                            <div class="contact-form">
                                <form action="" method="post" class="contact-form">

                                    <div class="controls">
                                        <div class="row">
                                            <div class="span4">
                                                <label>Your name</label>
                                                <span class="your-name">
                                                    <input type="text" name="your-name" value="" size="40">
                                                </span>
                                            </div>
                                            <div class="span4">
                                                <label>E-mail</label>
                                                <span class="your-email">
                                                    <input type="email" name="your-email" value="" size="40">
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="controls">
                                        <label>Message</label>
                                        <span class="your-message">
                                            <textarea name="your-message" cols="40" rows="10" class="span7"></textarea>
                                        </span>
                                    </div>

                                    <div class="controls">
                                        <button id="contact-submit" type="submit" class="btn btn-primary input-medium">
                                            Send
                                        </button>
                                    </div>
                                </form>
                            </div>


                        </div>
                        <!-- .entry-content -->
                    </article>
                    <!-- /#post -->


                </div>
                <!-- /#main -->

                <?php include( "sidebar_agency.php") ?>
                <!-- /#sidebar -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->
    <?php include( "footer.php") ?>
    <!-- /#footer-wrapper -->
    <script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?v=3&#038;sensor=true&#038;ver=3.6'></script>
    <script type='text/javascript' src='assets/js/aviators-map.js'></script>
    <script type='text/javascript' src='assets/js/gmap3.infobox.min.js'></script>
    <script type='text/javascript' src='assets/js/bootstrap.min.js'></script>
    <script type='text/javascript' src='assets/js/retina.js'></script>
    <script type='text/javascript' src='assets/js/gmap3.clusterer.js'></script>
    <script type='text/javascript' src='assets/js/jquery.ezmark.js'></script>
    <script type='text/javascript' src='assets/js/carousel.js'></script>
    <script type='text/javascript' src='assets/js/jquery.bxslider.js'></script>
    <script type='text/javascript' src='assets/js/properta.js'></script>
    <script type='text/javascript' src='assets/js/jquery.bxslider.min.js'></script>
</body>

</html>
