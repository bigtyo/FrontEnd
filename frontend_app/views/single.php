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

						<h1 class="page-header fl"><?php echo $property->JUDUL ?></h1>

						<div class="property-detail">

							<div class="row">
								<div class="span6 gallery">
									<div class="preview">
										<img src="<?php echo base_url()?>template/assets/img/property-tmp-small.png" alt="">
									</div>

									<div class="content">
										<ul>
											<li class="active">
												<div class="thumb">
													<a href="#"><img src="<?php echo base_url()?>template/assets/img/property-tmp-small.png" alt=""></a>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img src="<?php echo base_url()?>template/assets/img/property-tmp-small.png" alt=""></a>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img src="<?php echo base_url()?>template/assets/img/property-tmp-small.png" alt=""></a>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img src="<?php echo base_url()?>template/assets/img/property-tmp-small.png" alt=""></a>
												</div>
											</li>
											<li>
												<div class="thumb">
													<a href="#"><img src="<?php echo base_url()?>template/assets/img/property-tmp-small.png" alt=""></a>
												</div>
											</li>

										</ul>
									</div>
									<!-- /.content -->
								</div>

								<div class="overview">
									<div class="pull-right overview">
										<div class="row">
											<div class="span3">
												<!-- <h2>Overview</h2> -->

												<table>
													<tbody>
														<tr><th>Harga:</th><td class="price"><?php echo get_rupiah($property->HARGA) ?></td></tr>
														<tr><th>ID Properti:</th><td><strong><?php echo $property->LISTINGID ?></strong></td></tr>
														<tr><th>Contract type:</th><td><span class="contract-type">For sale</span></td></tr>
														<tr><th>Lokasi:</th><td><?php echo $property->NAMA_AREA ?></td></tr>
														<tr><th>Kota:</th><td><?php echo $property->NAMA_KOTA ?></td></tr>
														<tr><th>Propinsi:</th><td><?php echo $property->NAMA_PROPINSI ?></td></tr>
														<tr><th>Luas Tanah:</th><td><?php echo $property->LUAS_TANAH ?>m<sup>2</sup></td></tr>
														<tr><th>Luas Bangunan:</th><td><?php echo $property->LUAS_BANGUNAN ?>m<sup>2</sup></td></tr>
													</tbody>
												</table>
											</div>
											<!-- /.span2 -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.overview --></div>
							</div>

							<h2>Deskripsi</h2>
							<p>Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse auctor
								condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae mi. Pellentesque
								molestie elit bibendum tincidunt semper. Aliquam ac volutpat risus. In felis felis, posuere commodo aliquet eget,
								sagittis sed turpis. Phasellus commodo turpis non nunc egestas, et egestas felis pretium. Pellentesque dignissim
								libero vitae tincidunt semper. Nam id ante nisi. Nam sollicitudin, dolor non suscipit feugiat, nibh lacus commodo
								metus, nec tempus dui velit sagittis velit. Pellentesque elementum risus rhoncus justo porta, at varius odio
								consequat. Duis non augue adipiscing, posuere quam non, tempus urna.
							</p>


							<div class="row">
								<div class="span6">
									<div class="row">
										<div class="span6">
											<h2>Informasi Umum</h2>
											<div class="row">
												<ul class="span6">
													<li class="checked">Lantai : <?php echo $property->LANTAI ?></li>
													<li class="checked">Jumlah Kamar Tidur : <?php echo $property->KAMAR_TIDUR ?></li>
													<li class="checked">Jumlah Kamar Mandi : <?php echo $property->KAMAR_MANDI ?></li>
													<li class="checked">Daya Listrik : <?php echo $property->DAYA_LISTRIK ?></li>
													<li class="checked">Garasi : <?php echo $property->GARASI ?></li>
													<li class="checked">Perabotan : <?php echo ($property->FURNISHED==1)? "Dilengkapi Perabotan" : "Tidak ada" ?></li>
													<li class="checked">Sertifikat : <?php echo $property->SERTIFIKAT ?></li>
													<li class="checked">Kondisi : <?php echo $property->KONDISI ?> </li>
													<li class="checked">Telephone : <?php echo ($property->JALUR_TELEPON==1)? "Ada" : "Tidak ada" ?></li>
													<!--<li class="plain">Sertifikat : <?php echo $property->SERTIFIKAT ?></li>-->
												</ul>
											</div>
											<!-- /.row -->
										</div>
										<!-- /.span12 -->
									</div>
									<!-- /.row -->
								</div>

								<div class="span3">
									<h2>Map</h2>

									<div id="property-map"
             style="position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0);">
									</div>

									<script type="text/javascript">
										jQuery(document).ready(function ($) {
												function LoadMapProperty() {
													var locations = new Array(
														[38.951399, -76.958463]
													);
													var types = new Array(
														'family-house'
													);
													var markers = new Array();
													var plainMarkers = new Array();

													var mapOptions = {
														center: new google.maps.LatLng(38.951399, -76.958463),
														zoom: 14,
														mapTypeId: google.maps.MapTypeId.ROADMAP,
														scrollwheel: false
													};

													var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

													$.each(locations, function (index, location) {
															var marker = new google.maps.Marker({
																	position: new google.maps.LatLng(location[0], location[1]),
																	map: map,
																	icon: 'assets/img/marker-transparent.png'
																});

															var myOptions = {
																draggable: true,
																content: '<div class="marker ' + types[index] + '"><div class="marker-inner"></div></div>',
																disableAutoPan: true,
																pixelOffset: new google.maps.Size(-21, -58),
																position: new google.maps.LatLng(location[0], location[1]),
																closeBoxURL: "",
																isHidden: false,
																// pane: "mapPane",
																enableEventPropagation: true
															};
															marker.marker = new InfoBox(myOptions);
															marker.marker.isHidden = false;
															marker.marker.open(map, marker);
															markers.push(marker);
														});

													google.maps.event.addListener(map, 'zoom_changed', function () {
															$.each(markers, function (index, marker) {
																	marker.infobox.close();
																});
														});
												}

												google.maps.event.addDomListener(window, 'load', LoadMapProperty);

												var dragFlag = false;
												var start = 0, end = 0;

												function thisTouchStart(e) {
													dragFlag = true;
													start = e.touches[0].pageY;
												}

												function thisTouchEnd() {
													dragFlag = false;
												}

												function thisTouchMove(e) {
													if (!dragFlag) return;
													end = e.touches[0].pageY;
													window.scrollBy(0, ( start - end ));
												}

												document.getElementById("property-map").addEventListener("touchstart", thisTouchStart, true);
												document.getElementById("property-map").addEventListener("touchend", thisTouchEnd, true);
												document.getElementById("property-map").addEventListener("touchmove", thisTouchMove, true);
											});

									</script>
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
