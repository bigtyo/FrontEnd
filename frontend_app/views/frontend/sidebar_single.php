<div class="sidebar span3">

    <div id="agencies_widget-2" class="widget agencies">

        <h2>Agencies</h2>
        <div class="content">

            <div class="agency clearfix">
				<?php if(isset($property->MARKETING_NAME)){ ?>
				<h3><?php echo $property->MARKETING_NAME ?></h3>
				<?php } ?>
				
                <img class="img-polaroid" src="<?php echo base_url()?>template/images/office/<?php echo $property->OFFICEID ?>.jpg">
                <div class="address">
                    <?php echo $property->OFFICE_ADDRESS ?>
                </div>
                <!-- /.address -->
				<?php if(isset($property->MARKETING_EMAIL)) { ?>
                <div class="email">
                    <a href="mailto:<?php echo $property->MARKETING_EMAIL ?>">
                       Email : <?php echo ($property->MARKETING_EMAIL)? $property->MARKETING_EMAIL : "hidden"?>
					</a>
                </div>
                <!-- /.email -->
				<?php }  ?>
			

				<?php if(isset($property->MARKETING_PHONE)) { ?>
                <div class="phone">
                    Phone : <?php echo $property->MARKETING_PHONE ?>
                </div>
				<?php }?>
				
                <!-- /.phone -->

            </div>
            <!-- /.agency -->
        </div>
        <!-- /.content -->

    </div>


</div>