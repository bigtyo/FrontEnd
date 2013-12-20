<div id="footer-wrapper">

	<div id="footer-top">
		<div id="footer-top-inner" class="container">
			<div class="row">
				<div class="span3">
					<div id="mostrecentproperties_widget-3" class="widget properties">

						<h2>Most Recent Properties</h2>

						<div class="content">
							<?php foreach ($this->rumahsuper->footer_recent() as $obj) { ?>
								<div class="property clearfix">
									<div class="image">
										<a href="<?php echo base_url()."property/".url_title(strtolower($obj->JUDUL))."-".$obj->LISTINGID ?>">
											<img width="570" height="425" src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $obj->LISTINGID; ?>"
											class="thumbnail-image " alt="19"/>
										</a>
									</div>
									<!-- /.image -->

									<div class="wrapper">
										<div class="title">
											<h3>
												<a href="<?php echo base_url()."property/".url_title(strtolower($obj->JUDUL))."-".$obj->LISTINGID ?>">
													<?php echo $obj->ALAMAT_SINGKAT; ?>
												</a>
											</h3>
										</div>
										<!-- /.title -->

										<div class="location"><?php echo $obj->NAMA_LOKASI; ?> - <?php echo $obj->NAMA_KOTA; ?></div>
										<!-- /.location -->

										<div class="price">
											<?php echo get_rupiah($obj->HARGA); ?>
										</div>
										<!-- /.price -->
									</div>
									<!-- /.wrapper -->
								</div>
								<!-- /.property -->

								<div class="property-info clearfix">
									<div class="area">
										<i class="icon icon-normal-cursor-scale-up"></i>
										<?php echo $obj->LUAS_BANGUNAN; ?>m<sup>2</sup>
									</div>
									<!-- /.area -->

									<div class="bedrooms">
										<i class="icon icon-normal-bed"></i>
										<?php echo $obj->KAMAR_TIDUR; ?>
									</div>
									<!-- /.bedrooms -->

								</div>
								<!-- /.info -->

								<?php /*recent*/} ?>
						</div>
						<!-- /.content -->

					</div>
				</div>



				<div class="span6">
					<div id="agents_widget-2" class="widget our-agents">

						<h2>Agents</h2>

						<div class="content">
							<?php foreach ($this->rumahsuper->footer_marketing() as $obj) { ?>
								<div class="agent clearfix">
									<div class="image">
										<a href="agents/agent-detail">
											<img src="<?php echo base_url()?>template/assets/img/agent-tmp.png" alt="<?php echo $obj->TELEPON; ?>">
										</a>
									</div>
									<!-- /.image -->

									<div class="name">
										<a href="#"><?php echo $obj->NAMA; ?></a>
									</div>
									<!-- /.name -->

									<div class="office">
										<i class="icon icon-normal-mail"></i>
										<?php echo $obj->OFFICE; ?>
									</div>
									<div class="office">
										<i class="icon icon-normal-mail"></i>
										<?php echo $obj->OFFICE_ADDRESS; ?>
									</div>
									<!-- /.email -->
									
									<div class="phone">
										<i class="icon icon-normal-phone"></i>
										<?php echo $obj->TELEPON; ?>
									</div>
									<!-- /.phone -->
								</div>
								<?php /*marketing*/} ?>
						</div>
						<!-- /.content -->

					</div>
				</div>

				<div class="span3">
					<div id="featuredproperties_widget-2" class="widget properties">

						<h2>Featured Properties</h2>

						<div class="content">
							<?php foreach ($this->rumahsuper->footer_featured() as $property) { ?>
								<div class="property clearfix">
									<div class="image">
										<a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL))."-".$property->LISTINGID ?>">
											<img width="570" height="425" src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $property->LISTINGID; ?>"
											class="thumbnail-image " alt="1"/>
										</a>
									</div>
									<!-- /.image -->

									<div class="wrapper">
										<div class="title">
											<h3><a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL))."-".$property->LISTINGID ?>">
													<?php echo  $property->ALAMAT_SINGKAT; ?>
												</a></h3>
										</div>
										<!-- /.title -->

										<div class="location"><?php echo $property->NAMA_LOKASI ; ?> <?php echo $property->NAMA_KOTA ; ?></div>
										<!-- /.location -->

										<div class="price">
											<?php echo get_rupiah($property->HARGA); ?>
										</div>
										<!-- /.price -->
									</div>
									<!-- /.wrapper -->
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
								<!-- /.info -->
								<?php /*property*/} ?>
						</div>
						<!-- /.content -->

					</div>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /#footer-top-inner -->
	</div>
	<!-- /#footer-top -->

	<div class="footer-bottom">
		<div id="footer" class="footer container">
			<div id="footer-inner">
				<div class="row">
					<div class="span6">
						<div id="text-3" class="widget widget-text">
							<div class="textwidget">&copy; 2013 RumahSuper, All Rights reserved</div>
						</div>
					</div>
					<!-- /.copyright -->

					<div class="span6">
						<div id="nav_menu-3" class="widget widget-nav_menu">
							<div class="menu-footer-links-container">
								<ul id="menu-footer-links" class="menu"></ul>
							</div>
						</div>
					</div>
					<!-- /.span6 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /#footer-inner -->
		</div>
		<!-- /#footer -->
	</div>
</div>