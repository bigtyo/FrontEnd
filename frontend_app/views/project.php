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
					<div id="content" class="clearfix">
						<!-- /.map-wrapper -->
						<div class="container" style="margin-top:30px">
							<ul class="breadcrumb">
								<li><a href="<?php echo base_url()?>">Home</a> <span class="divider">/</span></li>
							  	<li class="active">Project</li>
							</ul>
							<div class="row" id="maincontainer">
								<?php include('sidebar_event.php')?>
								<!-- /#sidebar -->
								<div id="main" class="span9 property-listing">
									<h1 class="page-header">Events</h1>
									<div class="clearfix" id="listingcontainer">
										
										
                                                                            <div class="properties-rows" id="events">
                                                                                <input type="hidden" id="count" value="<?php echo $count; ?>"
                                                                                    <div class="row">
                                                                                            <?php foreach ($projects as $project) { ?>
                                                                                            <div class="property span9">
                                                                                                    <div class="row">
                                                                                                            <div class="span3">
                                                                                                                    <div class="image">
                                                                                                                            <div class="content">
                                                                                                                                    <a href="<?php echo base_url()."project/".url_title(strtolower($project->JUDUL))."-".$project->PROJECTID ?>">
                                                                                                                                    <img width="570" height="425"
                                                                                                                                    src="<?php echo PROJECT_UPLOAD_PATH; ?><?php echo $project->GAMBAR; ?>"
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
                                                                                                                                    <h2><a href="<?php echo base_url()."event/".url_title(strtolower($project->JUDUL))."-".$project->PROJECTID ?>"><?php echo $project->JUDUL ?></a></h2>
                                                                                                                            </div>
                                                                                                                            <!-- /.title -->
                                                                                                                            <div class="address">
                                                                                                                                    <?php echo $project->tanggal ?>
                                                                                                                            </div>
                                                                                                                            <!-- /.price -->
                                                                                                                    </div>
                                                                                                                    <!-- /.title -->
                                                                                                                    <div class="location"><?php echo $project->ALAMAT; ?></div>
                                                                                                                    <!-- /.location -->
                                                                                                                    <div class="body">
                                                                                                                            <p><?php echo $project->DESKRIPSI; ?></p>
                                                                                                                    </div>
                                                                                                                    <!-- /.body -->
                                                                                                                    <div class="property-info clearfix">
                                                                                                                            
                                                                                                                            <!-- /.bathrooms -->
                                                                                                                            <div class="more-info">
                                                                                                                                    <a href="<?php echo base_url()."event/".url_title(strtolower($project->JUDUL))."-".$project->PROJECTID ?>">More Info<i
                                                                                                                                    class="icon icon-normal-right-arrow-circle"></i></a>
                                                                                                                            </div>
                                                                                                                    </div>
                                                                                                                    <!-- /.info -->
                                                                                                            </div>
                                                                                                            <!-- /.body -->
                                                                                                    </div>
                                                                                                    <!-- /.row -->
                                                                                            </div>
                                                                                            <?php } ?>
                                                                                            <!-- /.property -->
                                                                                    </div>
                                                                                    <!-- /.row -->
                                                                            </div>
                                                                            <!-- /.properties-grid -->
                                                                        </div>
                                                                        <!-- /#main -->
                                                                </div>
												<!-- /.row -->
							</div>
											<!-- /.row -->
										</div>
										<!-- /.properties-grid -->
										<div class="pagination pagination-centered">
											<ul class="unstyled">
												<li><a href="#" onclick="firstpage();">First</a></li>
												<li><a href="#" onclick="prev();">Previous</a></li>
												<li><a href="#">1</a></li>
												<li><a href="#">2</a></li>
												<li class="active"><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li><a href="#">5</a></li>
												<li><a href="#" onclick="next();">Next</a></li>
												<li><a href="#" onclick="lastpage();" >Last</a></li>
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
                                                <?php if(isset($scripts)){
                                                    foreach($scripts as $script){ ?>
                                                        <script type='text/javascript' src='<?php echo base_url()?>template/js/<?php echo $script; ?>.js'></script>
                                                    <?php }
                                                } ?>
					</div>
				</body>
			</html>