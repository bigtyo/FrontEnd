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

		<link rel='stylesheet' id='revolution-fullwidth' href='assets/libraries/rs-plugin/css/fullwidth.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='revolution-settings' href='assets/libraries/rs-plugin/css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='bootstrap-css' href='assets/libraries/bootstrap/css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='bootstrap-responsive-css' href='assets/libraries/bootstrap/css/bootstrap-responsive.min.css' type='text/css' media='all'/>

		<link rel='stylesheet' id='pictopro-normal-css' href='assets/icons/pictopro-normal/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='justvector-web-font-css' href='assets/icons/justvector-web-font/stylesheet.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='chosen-css' href='assets/libraries/chosen/chosen.css' type='text/css' media='all'/>

		<link rel='stylesheet' id='aviators-css' href='assets/css/jquery.bxslider.css' type='text/css' media='all'/>
		<link rel='stylesheet' id='properta-css' href='assets/css/properta.css' type='text/css' media='all'/>

		<script type='text/javascript' src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
		<script type='text/javascript' src='assets/js/aviators-settings.js'></script>
		<script type='text/javascript' src='assets/libraries/chosen/chosen.jquery.min.js'></script>
		<script type='text/javascript' src='assets/libraries/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='assets/libraries/rs-plugin/js/jquery.themepunch.plugins.min.js'></script>

		<title>Properta | Real Estate Template</title>
	</head>
	<body class="home page page-template">
		<?php include('inc_top.php')?>
		<div id="content" class="clearfix">
			<!-- /.map-wrapper -->
			<div class="container">
				<div class="row">

					<?php include('inc_sidebar.php')?>
					<!-- /#sidebar -->

					<div id="main" class="span9 property-listing">

						<h1 class="page-header">Properties</h1>

						<div class="clearfix">
							<script type="text/javascript">
								jQuery(document).ready(function ($) {
										$('select[name=filter_sort_by]').change(function () {
												$('form.form-sort').submit();
											});

										$('select[name=filter_order]').change(function () {
												$('form.form-sort').submit();
											});


									});


							</script>

							<div class="properties-rows">
								<div class="filter-wrapper">
									<div class="filter pull-right">
										<form action="javascript:void(0)" method="get" class="form-sort form-horizontal pull-right">

											<div class="pager pull-right">
												<ul class="pager">
													<li><a href="#" ><i class="icon icon-normal-left-arrow-small"></i></a></li>
													<li><a href="#" ><i class="icon icon-normal-right-arrow-small"></i></a></li>
												</ul>
											</div><!-- /.pager -->

											<div class="control-group pull-right">
												<div class="controls">
													<select name="filter_sort_by" id="inputSortBy">
														<option value="price" >Price</option>
														<option value="published" >Published</option>
													</select>
												</div>
											</div>

											<div class="control-group pull-right">
												<div class="controls">
													<select id="inputOrder" name="filter_order" class="chosen">
														<option value="DESC" >Descending</option>
														<option value="ASC" >Ascending</option>
													</select>
												</div><!-- /.controls -->
											</div><!-- /.control-group -->
										</form>
										<!-- /.filter -->
									</div>
								</div>
								<!-- /.properties-rows --></div>


							<div class="properties-rows">
								<div class="row">
									<div class="property span9">
										<div class="row">
											<div class="span3">
												<div class="image">
													<div class="content">
														<a href="property-detail.html">
															<img width="570" height="425" src="assets/img/property-tmp-small.png" class="thumbnail-image" alt="19">
														</a>
													</div>
													<!-- /.content -->
												</div>
												<!-- /.image -->
											</div>

											<div class="body span6">
												<div class="title-price row">
													<div class="title span4">
														<h2><a href="property-detail.html">643 37th Ave</a>
														</h2>
													</div>
													<!-- /.title -->

													<div class="price">
														Contact us
													</div>
													<!-- /.price -->
												</div>
												<!-- /.title -->

												<div class="location">Burrville</div>
												<!-- /.location -->

												<div class="body">
													<p>Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse
														auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae
														...</p>
												</div>
												<!-- /.body -->

												<div class="property-info clearfix">
													<div class="area">
														<i class="icon icon-normal-cursor-scale-up"></i>
														800m<sup>2</sup>
													</div>
													<!-- /.area -->

													<div class="bedrooms">
														<i class="icon icon-normal-bed"></i>
														2
													</div>
													<!-- /.bedrooms -->


													<div class="more-info">
														<a href="property-detail.html">More Info<i
                          class="icon icon-normal-right-arrow-circle"></i></a>
													</div>
												</div>
												<!-- /.info -->
											</div>
											<!-- /.body -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.property -->
									<div class="property span9">
										<div class="row">
											<div class="span3">
												<div class="image">
													<div class="content">
														<a href="property-detail.html">
															<img width="570" height="425"
															src="assets/img/property-tmp-small.png"
															class="thumbnail-image" alt="20">
														</a>
													</div>
													<!-- /.content -->
												</div>
												<!-- /.image -->
											</div>

											<div class="body span6">
												<div class="title-price row">
													<div class="title span4">
														<h2><a href="property-detail.html">2459
																Tilden St</a></h2>
													</div>
													<!-- /.title -->

													<div class="price">
														500 � <span class="suffix">/ per month</span></div>
													<!-- /.price -->
												</div>
												<!-- /.title -->

												<div class="location">Judiciary Square</div>
												<!-- /.location -->

												<div class="body">
													<p>Nam convallis consequat dui. Suspendisse sit amet augue nunc. Quisque eget ligula quis diam viverra
														volutpat. Aliquam nec neque a metus blandit lobortis vitae vitae quam. Fusce ultricies molestie veli
														...</p>
												</div>
												<!-- /.body -->

												<div class="property-info clearfix">
													<div class="area">
														<i class="icon icon-normal-cursor-scale-up"></i>
														1030m<sup>2</sup>
													</div>
													<!-- /.area -->

													<div class="bedrooms">
														<i class="icon icon-normal-bed"></i>
														12
													</div>
													<!-- /.bedrooms -->

													<div class="bathrooms">
														<i class="icon icon-normal-shower"></i>
														6
													</div>
													<!-- /.bathrooms -->

													<div class="more-info">
														<a href="property-detail.html">More Info<i
                          class="icon icon-normal-right-arrow-circle"></i></a>
													</div>
												</div>
												<!-- /.info -->
											</div>
											<!-- /.body -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.property -->
									<div class="property span9">
										<div class="row">
											<div class="span3">
												<div class="image">
													<div class="content">
														<a href="property-detail.html">
															<img width="570" height="425"
															src="assets/img/property-tmp-small.png"
															class="thumbnail-image" alt="17">
														</a>
													</div>
													<!-- /.content -->
												</div>
												<!-- /.image -->
											</div>

											<div class="body span6">
												<div class="title-price row">
													<div class="title span4">
														<h2><a href="property-detail.html">677
																Cottage Terrace</a></h2>
													</div>
													<!-- /.title -->

													<div class="price">
														59,600 �
													</div>
													<!-- /.price -->
												</div>
												<!-- /.title -->

												<div class="location">Spring Valley</div>
												<!-- /.location -->

												<div class="body">
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et risus vitae lectus dapibus
														sagittis sit amet eu eros. Pellentesque accumsan mi nec tristique vehicula. Suspendisse potenti.
														Cras f ...</p>
												</div>
												<!-- /.body -->

												<div class="property-info clearfix">
													<div class="area">
														<i class="icon icon-normal-cursor-scale-up"></i>
														650m<sup>2</sup>
													</div>
													<!-- /.area -->

													<div class="bedrooms">
														<i class="icon icon-normal-bed"></i>
														1
													</div>
													<!-- /.bedrooms -->

													<div class="bathrooms">
														<i class="icon icon-normal-shower"></i>
														1
													</div>
													<!-- /.bathrooms -->

													<div class="more-info">
														<a href="property-detail.html">More
															Info<i class="icon icon-normal-right-arrow-circle"></i></a>
													</div>
												</div>
												<!-- /.info -->
											</div>
											<!-- /.body -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.property -->
									<div class="property span9">
										<div class="row">
											<div class="span3">
												<div class="image">
													<div class="content">
														<a href="property-detail.html">
															<img width="570" height="425"
															src="assets/img/property-tmp-small.png"
															class="thumbnail-image" alt="21">
														</a>
													</div>
													<!-- /.content -->
												</div>
												<!-- /.image -->
											</div>

											<div class="body span6">
												<div class="title-price row">
													<div class="title span4">
														<h2><a href="property-detail.html">126 31st
																Pl NE</a></h2>
													</div>
													<!-- /.title -->

													<div class="price">
														48,000 �
													</div>
													<!-- /.price -->
												</div>
												<!-- /.title -->

												<div class="location">Civic Betterment</div>
												<!-- /.location -->

												<div class="body">
													<p>Etiam ut est in odio tempor tincidunt vitae sed sem. Nullam dignissim lorem et erat dictum, cursus
														posuere lorem pretium. In leo elit, luctus vel vehicula vel, accumsan quis velit. Ut sagittis
														commodo ...</p>
												</div>
												<!-- /.body -->

												<div class="property-info clearfix">
													<div class="area">
														<i class="icon icon-normal-cursor-scale-up"></i>
														950m<sup>2</sup>
													</div>
													<!-- /.area -->

													<div class="bedrooms">
														<i class="icon icon-normal-bed"></i>
														2
													</div>
													<!-- /.bedrooms -->

													<div class="bathrooms">
														<i class="icon icon-normal-shower"></i>
														3
													</div>
													<!-- /.bathrooms -->

													<div class="more-info">
														<a href="property-detail.html">More Info<i class="icon icon-normal-right-arrow-circle"></i></a>
													</div>
												</div>
												<!-- /.info -->
											</div>
											<!-- /.body -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.property -->
									<div class="property span9">
										<div class="row">
											<div class="span3">
												<div class="image">
													<div class="content">
														<a href="property-detail.html">
															<img width="570" height="425"
															src="assets/img/property-tmp-small.png"
															class="thumbnail-image" alt="15">
														</a>
													</div>
													<!-- /.content -->
												</div>
												<!-- /.image -->
											</div>

											<div class="body span6">
												<div class="title-price row">
													<div class="title span4">
														<h2><a href="property-detail.html">Carlton Ave
																NE</a></h2>
													</div>
													<!-- /.title -->

													<div class="price">
														87,000 �
													</div>
													<!-- /.price -->
												</div>
												<!-- /.title -->

												<div class="location">Capitol Hill</div>
												<!-- /.location -->

												<div class="body">
													<p>Quisque non dictum eros. Praesent porta vehicula arcu eu ornare. Donec id egestas arcu. Suspendisse
														auctor condimentum ligula ultricies cursus. Vestibulum vel orci vel lacus rhoncus sagittis sed vitae
														...</p>
												</div>
												<!-- /.body -->

												<div class="property-info clearfix">
													<div class="area">
														<i class="icon icon-normal-cursor-scale-up"></i>
														800m<sup>2</sup>
													</div>
													<!-- /.area -->

													<div class="bedrooms">
														<i class="icon icon-normal-bed"></i>
														2
													</div>
													<!-- /.bedrooms -->

													<div class="bathrooms">
														<i class="icon icon-normal-shower"></i>
														3
													</div>
													<!-- /.bathrooms -->

													<div class="more-info">
														<a href="property-detail.html">More Info<i
                          class="icon icon-normal-right-arrow-circle"></i></a>
													</div>
												</div>
												<!-- /.info -->
											</div>
											<!-- /.body -->
										</div>
										<!-- /.row -->
									</div>
									<!-- /.property -->
								</div>
								<!-- /.row -->
							</div>
							<!-- /.properties-grid -->

							<div class="pagination pagination-centered">
								<ul class="unstyled">
									<li><a href="#">First</a></li>
									<li><a href="#">Previous</a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li class="active"><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">Next</a></li>
									<li><a href="#">Last</a></li>
								</ul>
							</div>


						</div>

						<!-- /#main -->

					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->

			</div>
			<!-- /#content -->
			<?php include('inc_footer.php')?>
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

		</div>
	</body>
</html>
