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

		<meta name='robots' content='noindex,nofollow'/>

		<link rel='stylesheet' id='font-css'
		href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C700%2C300&#038;subset=latin%2Clatin-ext&#038;ver=3.6'
		type='text/css' media='all'/>


		<link rel='stylesheet' id='revolution-fullwidth' href='<?php echo base_url()?>template/assets/libraries/rs-plugin/css/fullwidth.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='revolution-settings' href='<?php echo base_url()?>template/assets/libraries/rs-plugin/css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='bootstrap-css' href='<?php echo base_url()?>template/assets/libraries/bootstrap/css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='bootstrap-responsive-css' href='<?php echo base_url()?>template/assets/libraries/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='bootstrap-responsive-css' href='<?php echo base_url()?>template/css/style.css' type='text/css' media='all'/>

		<link rel='stylesheet' id='pictopro-normal-css' href='<?php echo base_url()?>template/assets/icons/pictopro-normal/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='justvector-web-font-css' href='<?php echo base_url()?>template/assets/icons/justvector-web-font/stylesheet.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='chosen-css' href='<?php echo base_url()?>template/assets/libraries/chosen/chosen.css' type='text/css' media='all'/>

		<link rel='stylesheet' id='aviators-css' href='<?php echo base_url()?>template/assets/css/jquery.bxslider.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='properta-css' href='<?php echo base_url()?>template/assets/css/properta.css' type='text/css' media='all'/>

		<script type='text/javascript' src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/aviators-settings.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/libraries/chosen/chosen.jquery.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/libraries/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/libraries/rs-plugin/js/jquery.themepunch.plugins.min.js'></script>

		<title>Properta | Real Estate Template</title>
	</head>

	<body class="home page page-template">
		<?php include('top.php')?>
		<div id="content" class="clearfix" style="margin-top:50px">

			<!-- /.map-wrapper -->
			<div class="container">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url()?>">Home</a> <span class="divider">/</span></li>
				  	<li><a href="<?php echo base_url("listing")?>">Property Listing</a> <span class="divider">/</span></li>
				  	<li class="active"><?php echo $property->JUDUL ?></li>
				</ul>

				<div class="row">
					<?php include('sidebar_single.php')?>
					<!-- /#sidebar -->

					<div id="main" class="span9 single-property">
						<h1 class="page-header fl"><?php echo $event->judul ?></h1>
                                                <div class="span12 gallery">
                                                    <div class="preview">
                                                            <img src="<?php echo NODE_URL; ?>getimageevent?id=<?php echo $event->eventid; ?>&index=1" alt="">
                                                    </div>

                                                    <div class="content">
                                                            <ul>
                                                                    <li class="active">
                                                                            <div class="thumb">
                                                                                    <a href="#"><img src="<?php echo NODE_URL; ?>getimageevent?id=<?php echo $event->eventid; ?>&index=2" alt=""></a>
                                                                            </div>
                                                                    </li>
                                                                    <li>
                                                                            <div class="thumb">
                                                                                    <a href="#"><img src="<?php echo NODE_URL; ?>getimageevent?id=<?php echo $event->eventid; ?>&index=3" alt=""></a>
                                                                            </div>
                                                                    </li>
                                                                    <li>
                                                                            <div class="thumb">
                                                                                    <a href="#"><img src="<?php echo NODE_URL; ?>getimageevent?id=<?php echo $event->eventid; ?>&index=4" alt=""></a>
                                                                            </div>
                                                                    </li>
                                                                    <li>
                                                                            <div class="thumb">
                                                                                    <a href="#"><img src="<?php echo NODE_URL; ?>getimageevent?id=<?php echo $event->eventid; ?>&index=5" alt=""></a>
                                                                            </div>
                                                                    </li>
                                                                    <li>
                                                                            <div class="thumb">
                                                                                    <a href="#"><img src="<?php echo NODE_URL; ?>getimageevent?id=<?php echo $event->eventid; ?>&index=6" alt=""></a>
                                                                            </div>
                                                                    </li>

                                                            </ul>
                                                    </div>
                                                    <!-- /.content -->
                                                </div>
						<div class="property-detail">
                                                    <p><?php echo $event->description; ?></p>
                                                    <div class="row">
								<div class="span6">
									<div class="row">
										<div class="span6">
											<h2>Informasi Umum</h2>
											<div class="row">
												<ul class="span6">
													
													<li class="checked">Tempat : <?php echo $event->Tempat ?></li>
													<li class="checked">Tanggal : <?php echo $event->tanggal ?></li>
													
													<!--<li class="plain">Sertifikat : <?php echo $event->SERTIFIKAT ?></li>-->
												</ul>
											</div>
											<!-- /.row -->
										</div>
										<!-- /.span12 -->
									</div>
									<!-- /.row -->
								</div>

								

							</div>
						</div>
                                                
					</div>
				</div>
			</div>
			<!-- /#main -->

		</div>
		<!-- /.row -->
		</div>
		<!-- /.container -->

		</div>
		<!-- /#content -->
		<?php include('footer.php')?>
		<!-- /#footer-wrapper -->
		<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?v=3&#038;sensor=true&#038;ver=3.6'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/aviators-map.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/gmap3.infobox.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/retina.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/gmap3.clusterer.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/jquery.ezmark.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/carousel.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/jquery.bxslider.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/properta.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>template/assets/js/jquery.bxslider.min.js'></script>
	</body>
</html>
