<div class="top">
	<div class="container">
		<div class="top-inner inverted">
			<div class="header clearfix" style="padding-top: 10px;padding-bottom:10px;margin-top: -20px">
				<div class="branding pull-left">
					<div class="logo">
						<a href="/" title="Home">
							<img src="<?php echo base_url("template/assets/img/logo_rumahsuper.png") ?>" alt="Home">
						</a>
					</div>
					<!-- /.logo -->

					<div class="site-name">
						<a href="<?php echo base_url() ?>" title="Home" class="brand">
						</a>
					</div>
					<!-- /.site-name -->
				</div>
				<script type="text/javascript">
					$(function ()
						{
							$('#js-news').ticker(
								{
									titleText: 'News',
									controls: false
								});
						});
				</script>
				<link href="<?php echo base_url()?>template/css/ticker-style.css" rel="stylesheet" type="text/css" />
				<script src="<?php echo base_url()?>template/js/jquery.ticker.js" type="text/javascript"></script>
				<div class="pull-right span6 hidden-phone">
					<ul id="js-news" class="js-hidden">
						<?php
						$news = $this->db->select("JUDUL, HARGA")->from('listing')->limit(50)->get()->result();
						shuffle($news);
						foreach ($news as $item) {
						?>
						<li class="news-item"><a href="#"><?php echo $item->JUDUL ?> - Harga <?php echo get_rupiah($item->HARGA) ?> </a></li>
						<?php /*end news loop */ } ?>
					</ul>
				</div>
			</div>
			<!-- /.header -->
			<div class="navigation navbar clearfix">
				<div class="pull-left">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<div class="nav-collapse collapse">
						<ul id="menu-main" class="nav">

							<li class="menu-item"><a href="<?php echo base_url()?>">Home</a></li>
							<li class="menu-item"><a href="<?php echo base_url()?>listing">Property Listing</a></li>
							<li class="menu-item"><a href="<?php echo base_url()?>listing">Project Listing</a></li>
							<li class="menu-item"><a href="<?php echo base_url()?>listing">Event</a></li>
							<li class="menu-item"><a href="<?php echo base_url()?>about">About</a></li>
							<li class="menu-item"><a href="<?php echo base_url()?>careers">Careers</a></li>
							<li class="menu-item"><a href="<?php echo base_url()?>contact">Contact</a></li>
						</ul>
					</div>
				</div>

				<div class="pull-right">
					<div class="list-property">
						<input id="subscribe-input" type="text" placeholder="Enter Your Email" class="span4 pull-left" style="width:97%;display: none"/>
						<a id="subscribe" href="<?php echo base_url()?>subscribe">Subscribe Newsletter<div class="ribbon"><span style="margin-left: 12px" class="icon icon-envelope icon-white"></span></div>
						</a>
						<script>
							$(function()
								{
									$('#subscribe').click(function()
										{
											$("#subscribe-input").fadeToggle().toggleClass('on');
											if(!$("#subscribe-input").hasClass('on'))
											{
												alert('Thank you, You are in our list ! ');
											}
											return false;
										});

								})
						</script>
					</div>
					<!-- /.list-property -->
				</div>
				<!-- /.pull-right -->

			</div>

			<!-- /.breadcrumb -->
		</div>
	</div>
</div>