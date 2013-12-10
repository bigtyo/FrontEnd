<div id="footer-wrapper">

			<div id="footer-top">
				<div id="footer-top-inner" class="container">
					<div class="row">
						<div class="span3">
							<div id="mostrecentproperties_widget-3" class="widget properties">

								<h2>Most Recent Properties</h2>

								<div class="content">
									<div class="property clearfix">
										<div class="image">
											<a href="property-detail.html">
												<img width="570" height="425" src="<?php echo base_url()?>template/assets/img/property-tmp-small.png"
												class="thumbnail-image " alt="19"/>
											</a>
										</div>
										<!-- /.image -->

										<div class="wrapper">
											<div class="title">
												<h3><a href="property-detail.html">
														643 37th Ave
													</a></h3>
											</div>
											<!-- /.title -->

											<div class="location">Burrville</div>
											<!-- /.location -->

											<div class="price">
												Contact us
											</div>
											<!-- /.price -->
										</div>
										<!-- /.wrapper -->
									</div>
									<!-- /.property -->

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

									</div>
									<!-- /.info -->
									<div class="property clearfix">
										<div class="image">
											<a href="property-detail.html">
												<img width="570" height="425" src="<?php echo base_url()?>template/assets/img/property-tmp-small.png"
												class="thumbnail-image " alt="20"/>
											</a>
										</div>
										<!-- /.image -->

										<div class="wrapper">
											<div class="title">
												<h3><a href="property-detail.html">
														2459 Tilden St
													</a></h3>
											</div>
											<!-- /.title -->

											<div class="location">Judiciary Square</div>
											<!-- /.location -->

											<div class="price">
												500 IDR <span class="suffix">/ per month</span></div>
											<!-- /.price -->
										</div>
										<!-- /.wrapper -->
									</div>
									<!-- /.property -->

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
									</div>
									<!-- /.info -->
									<div class="property clearfix">
										<div class="image">
											<a href="property-detail.html">
												<img width="570" height="425" src="<?php echo base_url()?>template/assets/img/property-tmp-small.png"
												class="thumbnail-image " alt="17"/>
											</a>
										</div>
										<!-- /.image -->

										<div class="wrapper">
											<div class="title">
												<h3><a href="property-detail.html">
														677 Cottage Terrace
													</a></h3>
											</div>
											<!-- /.title -->

											<div class="location">Spring Valley</div>
											<!-- /.location -->

											<div class="price">
												59,600 IDR
											</div>
											<!-- /.price -->
										</div>
										<!-- /.wrapper -->
									</div>
									<!-- /.property -->

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
									</div>
									<!-- /.info -->
								</div>
								<!-- /.content -->

							</div>
						</div>

						

						<div class="span6">
							<div id="agents_widget-2" class="widget our-agents">

								<h2>Agents</h2>
                                                                
								<div class="content">
                                                                    <?php if(isset($marketings)){ 
                                                                        foreach ($marketings as $obj){ ?>
                                                                           <div class="agent clearfix">
										<div class="image">
											<a href="agents/agent-detail">
												<img src="<?php echo base_url()?>template/assets/img/agent-tmp.png" alt="<?php echo $obj->nama; ?>">
											</a>
										</div>
										<!-- /.image -->

										<div class="name">
											<a href="#"><?php echo $obj->nama; ?></a>
										</div>
										<!-- /.name -->

										<div class="phone">
											<i class="icon icon-normal-phone"></i>
											<?php echo $obj->telepon; ?>
										</div>
										<!-- /.phone -->

										<div class="email">
											<i class="icon icon-normal-mail"></i>
											<a href="mailto:<?php echo $obj->email; ?>"><?php echo $obj->email; ?></a>
										</div>
										<!-- /.email -->
                                                                                <div class="office">
											<i class="icon icon-normal-mail"></i>
											<?php echo $obj->nama_kantor; ?>
										</div>
										<!-- /.email -->
									</div> 
                                                                    <?php }
                                                                    }else{ ?>
                                                                        <div class="agent clearfix">
										<div class="image">
											<a href="agents/agent-detail">
												<img src="<?php echo base_url()?>template/assets/img/agent-tmp.png" alt="Cynthia G. Stenson">
											</a>
										</div>
										<!-- /.image -->

										<div class="name">
											<a href="agents/agent-detail">Cynthia G. Stenson</a>
										</div>
										<!-- /.name -->

										<div class="phone">
											<i class="icon icon-normal-phone"></i>
											985-632-254
										</div>
										<!-- /.phone -->

										<div class="email">
											<i class="icon icon-normal-mail"></i>
											<a href="mailto:cynthia@example.com">cynthia@example.com</a>
										</div>
										<!-- /.email -->
									</div>
									<!-- /.agent -->
									<div class="agent clearfix">
										<div class="image">
											<a href="agents/agent-detail">
												<img src="<?php echo base_url()?>template/assets/img/agent-tmp.png" alt="Stephen E. Kennedy">
											</a>
										</div>
										<!-- /.image -->

										<div class="name">
											<a href="agents/agent-detail">Stephen E. Kennedy</a>
										</div>
										<!-- /.name -->

										<div class="phone">
											<i class="icon icon-normal-phone"></i>
											987-852-123
										</div>
										<!-- /.phone -->

										<div class="email">
											<i class="icon icon-normal-mail"></i>
											<a href="mailto:stephen@example.com">stephen@example.com</a>
										</div>
										<!-- /.email -->
									</div>
									<!-- /.agent -->
									<div class="agent clearfix">
										<div class="image">
											<a href="agents/agent-detail">
												<img src="<?php echo base_url()?>template/assets/img/agent-tmp.png" alt="Myrtle J. Metz">
											</a>
										</div>
										<!-- /.image -->

										<div class="name">
											<a href="agents/agent-detail">Myrtle J. Metz</a>
										</div>
										<!-- /.name -->

										<div class="phone">
											<i class="icon icon-normal-phone"></i>
											987-963-654
										</div>
										<!-- /.phone -->

										<div class="email">
											<i class="icon icon-normal-mail"></i>
											<a href="mailto:myrtle@example.com">myrtle@example.com</a>
										</div>
										<!-- /.email -->
									</div>
									<!-- /.agent -->
                                                                    <?php }?>
									
								</div>
								<!-- /.content -->

							</div>
						</div>

						<div class="span3">
							<div id="featuredproperties_widget-2" class="widget properties">

								<h2>Featured Properties</h2>

								<div class="content">
                                                                    <?php if(isset($hotpicks)){ 
                                                                            foreach ($hotpicks as $property){ ?>
                                                                                <div class="property clearfix">
                                                                                        <div class="image">
                                                                                                <a href="property-detail.html">
                                                                                                        <img width="570" height="425" src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $property->LISTINGID; ?>"
                                                                                                        class="thumbnail-image " alt="1"/>
                                                                                                </a>
                                                                                        </div>
                                                                                        <!-- /.image -->

                                                                                        <div class="wrapper">
                                                                                                <div class="title">
                                                                                                        <h3><a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL))."-".$property->LISTINGID ?>">
                                                                                                                        <?php echo $property->ALAMAT_SINGKAT; ?>
                                                                                                                </a></h3>
                                                                                                </div>
                                                                                                <!-- /.title -->

                                                                                                <div class="location"><?php echo $property->lokasi; ?></div>
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
                                                                            <?php } 
                                                                          }else{?>
                                                                            <div class="property clearfix">
                                                                                    <div class="image">
                                                                                            <a href="property-detail.html">
                                                                                                    <img width="570" height="425" src="<?php echo base_url()?>template/assets/img/property-tmp-small.png"
                                                                                                    class="thumbnail-image " alt="1"/>
                                                                                            </a>
                                                                                    </div>
                                                                                    <!-- /.image -->

                                                                                    <div class="wrapper">
                                                                                            <div class="title">
                                                                                                    <h3><a href="property-detail.html">
                                                                                                                    20th St NE
                                                                                                            </a></h3>
                                                                                            </div>
                                                                                            <!-- /.title -->

                                                                                            <div class="location">Benning</div>
                                                                                            <!-- /.location -->

                                                                                            <div class="price">
                                                                                                    85,600 IDR
                                                                                            </div>
                                                                                            <!-- /.price -->
                                                                                    </div>
                                                                                    <!-- /.wrapper -->
                                                                            </div>
                                                                            <!-- /.property -->

                                                                            <div class="property-info clearfix">
                                                                                    <div class="area">
                                                                                            <i class="icon icon-normal-cursor-scale-up"></i>
                                                                                            450m<sup>2</sup>
                                                                                    </div>
                                                                                    <!-- /.area -->

                                                                                    <div class="bedrooms">
                                                                                            <i class="icon icon-normal-bed"></i>
                                                                                            1
                                                                                    </div>
                                                                                    <!-- /.bedrooms -->

                                                                                    <div class="bathrooms">
                                                                                            <i class="icon icon-normal-shower"></i>
                                                                                            2
                                                                                    </div>
                                                                                    <!-- /.bathrooms -->
                                                                            </div>
                                                                            <!-- /.info -->
                                                                            <div class="property clearfix">
                                                                                    <div class="image">
                                                                                            <a href="property-detail.html">
                                                                                                    <img width="570" height="425" src="<?php echo base_url()?>template/assets/img/property-tmp-small.png"
                                                                                                    class="thumbnail-image " alt="12"/>
                                                                                            </a>
                                                                                    </div>
                                                                                    <!-- /.image -->

                                                                                    <div class="wrapper">
                                                                                            <div class="title">
                                                                                                    <h3><a href="property-detail.html">
                                                                                                                    246 Varnum Pl NE
                                                                                                            </a></h3>
                                                                                            </div>
                                                                                            <!-- /.title -->

                                                                                            <div class="location">Kingman Park</div>
                                                                                            <!-- /.location -->

                                                                                            <div class="price">
                                                                                                    32,500 IDR
                                                                                            </div>
                                                                                            <!-- /.price -->
                                                                                    </div>
                                                                                    <!-- /.wrapper -->
                                                                            </div>
                                                                            <!-- /.property -->

                                                                            <div class="property-info clearfix">
                                                                                    <div class="area">
                                                                                            <i class="icon icon-normal-cursor-scale-up"></i>
                                                                                            500m<sup>2</sup>
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
                                                                            </div>
                                                                            <!-- /.info -->
                                                                            <div class="property clearfix">
                                                                                    <div class="image">
                                                                                            <a href="property-detail.html">
                                                                                                    <img width="570" height="425" src="<?php echo base_url()?>template/assets/img/property-tmp-small.png"
                                                                                                    class="thumbnail-image " alt="6"/>
                                                                                            </a>
                                                                                    </div>
                                                                                    <!-- /.image -->

                                                                                    <div class="wrapper">
                                                                                            <div class="title">
                                                                                                    <h3><a href="property-detail.html">
                                                                                                                    Randolph St NW
                                                                                                            </a></h3>
                                                                                            </div>
                                                                                            <!-- /.title -->

                                                                                            <div class="location">Civic Betterment</div>
                                                                                            <!-- /.location -->

                                                                                            <div class="price">
                                                                                                    97,400 IDR
                                                                                            </div>
                                                                                            <!-- /.price -->
                                                                                    </div>
                                                                                    <!-- /.wrapper -->
                                                                            </div>
                                                                            <!-- /.property -->

                                                                            <div class="property-info clearfix">
                                                                                    <div class="area">
                                                                                            <i class="icon icon-normal-cursor-scale-up"></i>
                                                                                            680m<sup>2</sup>
                                                                                    </div>
                                                                                    <!-- /.area -->

                                                                                    <div class="bedrooms">
                                                                                            <i class="icon icon-normal-bed"></i>
                                                                                            3
                                                                                    </div>
                                                                                    <!-- /.bedrooms -->

                                                                                    <div class="bathrooms">
                                                                                            <i class="icon icon-normal-shower"></i>
                                                                                            2
                                                                                    </div>
                                                                                    <!-- /.bathrooms -->
                                                                            </div>
                                                                            <!-- /.info -->
                                                                    <?php } ?>
									
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