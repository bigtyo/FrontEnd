<div class="sidebar span3">

    <div id="agencies_widget-2" class="widget agencies">

        <h2>Agencies</h2>

        <div class="content" style="border: 1px solid rgba(255, 255, 255, 0.2)">
            <?php foreach($this->propertylib->get_marketing_list($property->LISTINGID) as $item) { ?>
            <div class="agent clearfix" >
                <div class="image" style="float:left;margin-right: 10px;margin-bottom: 10px">
                        <a href="agents/agent-detail">
                            <?php if($item->gambar != null && $item->gambar = "" ){ ?>
                                <img style="max-width: 70px;max-height: 70px" src="<?php echo EMPLOYEE_UPLOAD_PATH.$item->gambar?>" alt="<?php echo $item->nama_marketing; ?>">
                            <?php }else{ ?>
                                <img style="max-width: 70px;max-height: 70px" src="<?php echo base_url()?>template/assets/img/agent-tmp.png" alt="<?php echo $item->nama_marketing; ?>">
                            <?php } ?>
                        </a>
                </div>
                <!-- /.image -->

                <div class="name">
                        <a href="#"><?php echo $item->nama_marketing; ?></a>
                </div>
                <!-- /.name -->

                <div class="phone">
<!--                        <i class="icon icon-normal-phone"></i>-->
                        telepon : <?php if($item->telepon != null && $item->telepon != ""){echo $item->telepon;} else { echo $item->telepon_kantor;} ?>
                </div>
                <!-- /.phone -->

                <div class="email">
<!--                        <i class="icon icon-normal-mail"></i>-->
                        email :  <a href="mailto:<?php if($item->email != null && $item->email != ""){echo $item->email;} else {echo $item->email_kantor;} ?>"><?php if($item->email != "")echo $item->email; else { echo$item->email_kantor;} ?></a>
                </div>
                <!-- /.email -->
<!--                <div class="office">
                        
                        <?php echo $item->nama_kantor; ?>
                </div>-->
                <!-- /.email -->
        </div> 
            </br>
            <div class="agency clearfix">
                <img class="img-polaroid" src="<?php echo base_url()?>template/images/office/<?php echo $item->officeid ?>.jpg">
                <div class="address">
                    <?php echo $item->alamat_kantor ?>
                </div>
                <!-- /.address -->

                <div class="email">
                    <a href="mailto:<?php echo $item->email_kantor ?>">
                        <?php echo $item->email_kantor ?></a>
                </div>
                <!-- /.email -->

                <div class="phone">
                    <?php echo $item->telepon_kantor ?>
                </div>
                <!-- /.phone -->

            </div>
            
            <!-- /.agency -->
            <?php } ?>
        </div>
        <!-- /.content -->

    </div>
</div>