<div class="sidebar span3">
    <h2>Search Properties</h2>

    <div class="property-filter widget">
        <div class="content">
								<form method="post" action="index.php/listing">
									<div class="location control-group">
										<label class="control-label">Type Property</label>
										<div class="controls">
											<select name="tipepropid">
												<option value="0">-</option>
												<?php foreach ($this->propertylib->get_all_tipe_property() as $item) { ?>
												<option value="<?php echo $item->NAMA_TIPE ?>"><?php echo $item->NAMA_TIPE ?></option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Area</label>
										<div class="controls">
											<select name="areaid">
												<option value="0">-</option>
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
											<select name="kotaid">
												<option value="0">-</option>
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
											<select name="propinsiid">
												<option value="0">-</option>
												<?php foreach ($this->propertylib->get_all_state() as $item) { ?>
												<option value="<?php echo $item->PROPINSIID ?>"><?php echo $item->NAMA_PROPINSI ?></option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									

									<div class="type control-group">
										<label class="control-label">Harga</label>
										<div class="controls">
											<select name="harga">
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
											<select name="luas_bangunan">
												<option>-</option>
												<option>Apartment</option>
												<option>Villa</option>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->

									<div class="type control-group">
										<label class="control-label">Jumlah Kamar Tidur</label>
										<div class="controls">
											<select name="kamar_tidur">
												<option value="0">-</option>
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
											<select name="kamar_mandi">
												<option value="0">-</option>
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
											<select name="garasi">
												<option value="0">-</option>
												<?php for($i=1;$i<6;$i++) { ?>
												<option value="<?php echo $i ?>"><?php echo $i ?> Garasi</option>
												<?php } ?>
											</select>
										</div>
										<!-- /.controls -->
									</div>
									<!-- /.control-group -->


									<div class="form-actions">
										<button class="btn btn-primary btn-large" >Cari Properti</button>
									</div>
									<!-- /.form-actions -->
								</form>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.property-filter -->

    <div id="agencies_widget-2" class="widget agencies">

        <h2>Agencies</h2>

        <div class="content">
            <?php foreach($this->propertylib->get_all_office() as $item) { ?>

            <div class="agency clearfix">
                <img class="img-polaroid" src="<?php echo base_url()?>template/images/office/<?php echo $item->OFFICEID ?>.jpg">
                <div class="address">
                    <?php echo $item->ALAMAT ?>
                </div>
                <!-- /.address -->

                <div class="email">
                    <a href="mailto:<?php echo $item->EMAIL ?>">
                        <?php echo $item->EMAIL ?></a>
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

    </div>


</div>