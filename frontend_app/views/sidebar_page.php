<div class="sidebar span3">
					
						 <div id="agencies_widget-2" class="widget agencies">

							<h2>Agencies</h2>

							<div class="content">
								<?php foreach($this->propertylib->get_all_office() as $item) { ?>
								<div class="agency clearfix">
									<div class="header">
										<div class="image">
											<a href="agencies/agency-detail">
												<img src="<?php echo base_url()?>template/assets/img/agency-small-tmp.png" alt="Beverly Hills Real Estate">
											</a>
										</div>
										<!-- /.image -->

										<div class="info">
											<h2><?php echo $item->NAMA ?></h2>

											<div class="properties-count">
												<span class="number">2</span> properties
											</div>
											<!-- /.properties-count -->

											<a href="" class="btn">View profile</a>
										</div>
										<!-- /.info -->
									</div>
									<!-- /.header -->

									<div class="address">
										<?php echo $item->ALAMAT ?>
									</div>
									<!-- /.address -->

									<div class="email">
										<a href="mailto:<?php echo $item->EMAIL ?>"><?php echo $item->EMAIL ?></a>
									</div>
									<!-- /.email -->

									<div class="phone">
										<?php echo $item->TELEPON ?>
									</div>
									<!-- /.phone -->

								</div>
								<!-- /.agency -->
								<?php } ?>
							</div>
							<!-- /.content -->

						</div></div>