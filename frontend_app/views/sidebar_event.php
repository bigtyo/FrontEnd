<div class="sidebar span3">
    <h2>Search Event</h2>

    <div class="property-filter widget">
        <div class="content">
            <form method="get" action="javascript:void(0);">
                <div class="location control-group">
                    <label class="control-label">Tanggal Event</label>
                    <div class="controls">
                        <input type="text" class="date" />
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="type control-group">
                    <label class="control-label">Lokasi</label>
                    <div class="controls">
                        <input type="text" id="lokasi" class="date" />
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                <div class="type control-group">
                    <label class="control-label">Penyelenggara</label>
                    <div class="controls">
                        <select name="office" id="officeid">
                            <option value="">-</option>
                            <?php foreach ($this->propertylib->get_all_office() as $office) { ?>
                            <option value="<?php echo $office->OFFICEID ?>">
                                <?php echo $office->NAMA ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <!-- /.controls -->
                </div>
                <!-- /.control-group -->

                
                <!-- /.control-group -->


                <div class="form-actions">
                    <button class="btn btn-primary btn-large" id="btnCari">Cari Event</button>
                </div>
                <!-- /.form-actions -->
            </form>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.property-filter -->
    
    
</div>