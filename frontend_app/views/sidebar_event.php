<div class="sidebar span3">
    

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