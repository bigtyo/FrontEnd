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

		<link rel="shortcut icon" href="<?php echo base_url()?>template/assets/img/favicon.png" type="image/png">

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

		<title>RumahSuper.com</title>
	</head>

	<body class="home page page-template">

		<?php include('top.php')?>
		<!-- START REVOLUTION SLIDER 3.0.5 fullwidth mode -->
		<div id="content" class="clearfix">

			<div id="frontpage-slider-wrapper" class="revolution-slider fullwidthbanner-container"
     style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:700px;">
				<div id="frontpage-slider" class="rev_slider fullwidthabanner" style="display:none;max-height:700px;height:700;">
					<ul>
						<li data-transition="fade" data-slotamount="7" data-masterspeed="300">
							<img src="<?php echo base_url()?>template/assets/img/revolution/bg1.jpg" alt="bg3"
							data-fullwidthcentering="on">

							<div class="tp-caption very_large_text sfr"
                     data-x="10"
                     data-y="266" data-speed="300"
                     data-start="500"
                     data-easing="easeInOutQuad">Situs Property Paling Lengkap:
							</div>

							<div class="tp-caption large_text sfr"
                     data-x="10"
                     data-y="369" data-speed="300"
                     data-start="600"
                     data-easing="easeInOutQuad">Listing paling update
							</div>

							<div class="tp-caption large_text sfr"
                     data-x="9"
                     data-y="422" data-speed="300"
                     data-start="700"
                     data-easing="easeInOutQuad">Harga Kompetitif
							</div>

							<div class="tp-caption large_text sfr"
                     data-x="10"
                     data-y="477" data-speed="300"
                     data-start="800"
                     data-easing="easeInOutQuad">Agent Terbaik
							</div>

							<div class="tp-caption large_text sfr"
                     data-x="10"
                     data-y="528" data-speed="300"
                     data-start="1100"
                     data-easing="easeInOutQuad">SEO on-page optimized
							</div>

						</li>
					</ul>
				</div>
			</div>

			<script type="text/javascript">

				jQuery('#frontpage-slider').show().revolution(
					{
						delay: 9000,
						startwidth: 960,
						startheight: 700,
						hideThumbs: 200,

						thumbWidth: 100,
						thumbHeight: 50,
						thumbAmount: 3,

						navigationType: "bullet",
						navigationArrows: "solo",
						navigationStyle: "round",

						touchenabled: "on",
						onHoverStop: "off",

						navigationHAlign: "center",
						navigationVAlign: "bottom",
						navigationHOffset: 0,
						navigationVOffset: 20,

						soloArrowLeftHalign: "left",
						soloArrowLeftValign: "center",
						soloArrowLeftHOffset: 20,
						soloArrowLeftVOffset: 0,

						soloArrowRightHalign: "right",
						soloArrowRightValign: "center",
						soloArrowRightHOffset: 20,
						soloArrowRightVOffset: 0,

						shadow: 0,
						fullWidth: "on",
						fullScreen: "off",

						stopLoop: "off",
						stopAfterLoops: -1,
						stopAtSlide: -1,

						shuffle: "off",

						hideSliderAtLimit: 0,
						hideCaptionAtLimit: 0,
						hideAllCaptionAtLilmit: 0,
						startWithSlide: 0,
						fullScreenOffsetContainer: ""
					});
			</script>

			<!-- END REVOLUTION SLIDER -->

			<!-- /.map-wrapper -->

			<div class="container" style="margin-top:30px;">
				<ul class="breadcrumb">
					<li><a href="<?php echo base_url()?>">Home</a> <span class="divider">/</span></li>
				  	<li class="active">Listing Property</li>
				</ul>
				<div class="row">

					<?php include('sidebar2.php')?>
					<!-- /#sidebar -->

					<div id="main" class="span9">
						<div id="carouselproperties" class="property-carousel widget">
							<h2>Hot Property</h2>
							<div class="carousel">
								<ul class="bxslider properties-grid unstyled">
                                                                    <?php foreach ($model->getHotPick() as $property){ ?>
									<li>
										<div class="property">
											<div class="image">
												<div class="content">
													<a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL))."-".$property->LISTINGID ?>">
														<div class="description"><p><?php echo $property->DESCRIPTION; ?></p></div>
														<img src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $property->LISTINGID; ?>" alt="<?php echo $property->ALAMAT_SINGKAT; ?>">
													</a>
												</div>
												<!-- /.content -->

												

												<div class="price">
													<?php echo get_rupiah($property->HARGA); ?>
												</div>
												<!-- /.price -->

											</div>
											<!-- /.image -->

											<div class="info">
												<div class="title clearfix">
													<h2><a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL))."-".$property->LISTINGID ?>">
															<?php echo $property->ALAMAT_SINGKAT; ?>
														</a></h2>
												</div>
												<!-- /.title -->

												<div class="location"><?php echo $property->lokasi; ?></div>
												<!-- /.location -->
											</div>
											<!-- /.info -->

										</div>
										<!-- /.property -->

										<div class="property-info clearfix">
											<div class="area">
												<i class="icon icon-normal-cursor-scale-up"></i>
												<?php echo $property->LUAS_BANGUNAN; ?>m<sup>2</sup>
											</div>
											<!-- /.area -->

											<div class="bedrooms">
												<i class="icon icon-normal-bed"></i>
												<?php echo $property->KAMAR_TIDUR; ?>
											</div>
											<!-- /.bedrooms -->

										</div>
										<!-- /.property-info -->

									</li>
                                                                    <?php } ?>	
								</ul>
							</div>


						</div>

						<h1 class="page-header">Recent Project</h1>
						<div class="properties-grid">
							<?php
							$offset_array = array(0);
							foreach($offset_array as $offset){
								?>
								<div class="row-fluid">
									<?php foreach($model->get_homepage_listing($offset) as $property){
										?>
										<div class="span3">
											<div class="property">
												<div class="image">
													<div class="content">
														<a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL)."-".$property->LISTINGID); ?>">
															<div class="description"><p><?php echo $property->ALAMAT_LENGKAP ?></p></div>
															<img src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $property->LISTINGID; ?>" alt="<?php echo $property->ALAMAT_SINGKAT; ?>">
														</a>
													</div>
													<div class="rent-sale">Sale</div>
													<div class="price"><?php echo get_rupiah($property->HARGA) ?></div>
												</div>
												<!-- /.image -->

												<div class="info">
													<div class="title clearfix">
														<h2><a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL)."-".$property->LISTINGID) ?>"><?php echo $property->JUDUL ?></a></h2>
													</div>
													<div class="location"><?php echo $property->lokasi; ?></div>
												</div>
												<!-- /.info -->
											</div>
											<!-- /.property -->

											<div class="property-info clearfix">
												<div class="area"><i class="icon icon-normal-cursor-scale-up"></i><?php echo $property->LUAS_BANGUNAN; ?>m<sup>2</sup></div>
												<div class="bedrooms"><i class="icon icon-normal-bed"></i><?php echo $property->KAMAR_TIDUR; ?></div>
												<div class="bathrooms"><i class="icon icon-normal-shower"></i><?php echo $property->KAMAR_MANDI; ?></div>
												<!-- /.bathrooms -->
											</div>
											<!-- /.property-info -->
										</div>
										<?php
									} ?>
								</div>
								<?php
							} ?>
							<div class="row-fluid">
							</div>
							<!-- /.row -->
						</div>

						<!-- /.properties-grid -->
						<div class="show-all"><a href="properties/">Show all</a></div>

						<h1 class="page-header">Recent Properties</h1>
						<div class="properties-grid">
							<?php
							$offset_array = array(0,4,8,12);
							foreach($offset_array as $offset){
								?>
								<div class="row-fluid">
									<?php foreach($model->get_homepage_listing($offset) as $property){
										?>
										<div class="span3">
											<div class="property">
												<div class="image">
													<div class="content">
														<a href="property-detail.html">
															<div class="description"><p><?php echo $property->ALAMAT_LENGKAP ?></p></div>
															<img src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $property->LISTINGID; ?>" alt="<?php echo $property->ALAMAT_SINGKAT; ?>">
														</a>
													</div>
													<!-- /.content -->

													

													<div class="price">
														<?php echo get_rupiah($property->HARGA) ?>
													</div>
													<!-- /.price -->

												</div>
												<!-- /.image -->

												<div class="info">
													<div class="title clearfix">
														<h2><a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL)."-".$property->LISTINGID) ?>">
																<?php echo $property->JUDUL ?>
															</a></h2>
													</div>
													<!-- /.title -->

													<div class="location"><?php echo $property->lokasi; ?></div>
													<!-- /.location -->
												</div>
												<!-- /.info -->

											</div>
											<!-- /.property -->

											<div class="property-info clearfix">
												<div class="area">
													<i class="icon icon-normal-cursor-scale-up"></i>
													<?php echo $property->LUAS_BANGUNAN; ?>m<sup>2</sup>
												</div>
												<!-- /.area -->

												<div class="bedrooms">
													<i class="icon icon-normal-bed"></i>
													<?php echo $property->KAMAR_TIDUR; ?>
												</div>
												<!-- /.bedrooms -->

												<div class="bathrooms">
													<i class="icon icon-normal-shower"></i>
													<?php echo $property->KAMAR_MANDI; ?>
												</div>
												<!-- /.bathrooms -->
											</div>
											<!-- /.property-info -->
										</div>
										<?php
									} ?>
								</div>
								<?php
							} ?>
							<div class="row-fluid">
							</div>
							<!-- /.row -->
						</div>

						<!-- /.properties-grid -->
						<div class="show-all">
							<a href="properties/">Show all</a>
						</div>            <hr>

						<h2>Our Event</h2>
						<div class="properties-grid featured">
							<div class="row">
							<?php foreach($this->propertylib->get_recent_event() as $item ) { ?>
								<div class="span3">
									<div class="property">
										<div class="image">
											<div class="content">
												<a href="<?php echo base_url()."event/".url_title(strtolower($item->judul))."-".$item->eventid ?>">
													<div class="description"><p>Quisque non dictum eros. Praesent porta vehicula arcu eu
															ornare. Donec id egestas arcu. Suspendisse auctor condimentum ligula ultricies
															cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae ...</p></div>
													<img src="<?php echo NODE_URL; ?>getimageevent?id=<?php echo $event->eventid; ?>" alt="Event">
												</a>
											</div>
											<!-- /.content -->
										</div>
										<!-- /.image -->

										<div class="info">
											<div class="title clearfix">
												<h2><a href="<?php echo base_url()."event/".url_title(strtolower($item->judul))."-".$item->eventid ?>"><?php echo $item->judul ?></a></h2>
											</div>
											<!-- /.title -->

											<div class="location">12/12/2013</div>
											<!-- /.location -->
										</div>
										<!-- /.info -->

									</div>
									<!-- /.property -->
								</div>
								<!-- /.span4 -->
							<?php } ?>
							</div>
						</div>
						<!-- /.properties-grid -->

						<div class="show-all"><a href="properties/">Show all Event</a></div><hr>
				
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
