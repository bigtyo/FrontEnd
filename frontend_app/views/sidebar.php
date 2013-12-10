<div class="sidebar span3">
						<h2>Search Properties</h2>

						<div class="property-filter widget">
							<div class="content">
								<form method="get" action="javascript:void(0);">
									<div class="location control-group">
										<label class="control-label">Type Property</label>
										<div class="controls">
											<select name="kota" id="tipepropertiid">
												<option value="">-</option>
												<?php foreach ($this->propertylib->get_all_tipe_property() as $item) { ?>
												<option value="<?php echo $item->TIPEPROPID; ?>"><?php echo $item->NAMA_TIPE ?></option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Area</label>
										<div class="controls">
											<select name="area" id="area">
												<option value="">-</option>
												<?php foreach ($this->propertylib->get_all_area() as $item) { ?>
												<option value="<?php echo $item->AREAID ?>"><?php echo $item->NAMA_AREA ?></option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Kota</label>
										<div class="controls">
											<select name="kota" id="kota">
												<option value="">-</option>
												<?php foreach ($this->propertylib->get_all_city() as $kota) { ?>
												<option value="<?php echo $kota->KOTAID ?>"><?php echo $kota->NAMA_KOTA ?></option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">
											Propinsi
										</label>
										<div class="controls">
											<select name="propinsi" id="propinsi">
												<option value="">-</option>
												<?php foreach ($this->propertylib->get_all_state() as $item) { ?>
												<option value="<?php echo $item->PROPINSIID ?>"><?php echo $item->NAMA_PROPINSI ?></option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Harga</label>
										<div class="controls">
											<select name="filter_type" id="harga">
												<option value=";">-</option>
												<option value="250000000;">< Rp 250 juta</option>
												<option value="250000000;500000000">Rp 250 juta - Rp 500 juta</option>
												<option value="500000000;1000000000">Rp 500 juta - Rp 1 miliar</option>
												<option value="1000000000;2000000000">Rp 1 miliar - Rp 2 miliar</option>
												<option value="2000000000;5000000000">Rp 2 miliar - Rp 5 miliar</option>
												<option value=";5000000000">> Rp 5 miliar</option>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Luas Bangunan</label>
										<div class="controls">
											<input type="text"  id="luas_bangunan" />
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Jumlah Kamar Tidur</label>
										<div class="controls">
											<select name="kamar_tidur" id="kamar_tidur">
												<option value="">-</option>
												<?php for($i=1;$i<21;$i++) { ?>
												<option value="<?php echo $i ?>"><?php echo $i ?> Kamar Tidur</option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Jumlah Kamar Mandi</label>
										<div class="controls">
											<select name="kamar_mandi" id="kamar_mandi">
												<option value="">-</option>
												<?php for($i=1;$i<21;$i++) { ?>
												<option value="<?php echo $i ?>"><?php echo $i ?> Kamar Mandi</option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Garasi Mobil</label>
										<div class="controls">
											<select name="garasi" id="garasi">
												<option value="">-</option>
												<?php for($i=1;$i<6;$i++) { ?>
												<option value="<?php echo $i ?>"><?php echo $i ?> Garasi</option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->


									<div class="form-actions">
										<button class="btn btn-primary btn-large" id="btnCari">Cari Properti</button>
									</div>
									<!-- /.form-actions -->
								</form>
							</div>
							<!-- /.content -->
						</div><!-- /.property-filter -->
						<div id="mostrecentproperties_widget-2" class="widget properties">

							<h2>Properti Terbaru</h2>
							<div class="content">
								
								<?php if(isset($recents)){
                                                                    foreach ($recents as $obj) { ?>
								<div class="property clearfix">
									<div class="image">
										<a href="<?php echo base_url()."property/".url_title(strtolower($obj->JUDUL))."-".$obj->LISTINGID ?>">
											<img width="570" height="425" src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $obj->LISTINGID; ?>"
											class="thumbnail-image " alt="17"/>
										</a>
									</div>
									<!-- /.image -->

									<div class="wrapper">
										<div class="title">
											<h3><a href="<?php echo base_url()."property/".url_title(strtolower($obj->JUDUL))."-".$obj->LISTINGID ?>">
													<?php echo $obj->ALAMAT_SINGKAT; ?>
												</a></h3>
										</div>
										<!-- /.title -->

										<div class="location"><?php echo $obj->lokasi; ?></div>
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

									<div class="bathrooms">
										<i class="icon icon-normal-shower"></i>
										<?php echo $obj->KAMAR_MANDI; ?>
									</div>
									<!-- /.bathrooms -->
								</div>
								<!-- /.info -->

								<?php }
                                                                } ?>
							</div>
							<!-- /.content -->

						</div>           
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