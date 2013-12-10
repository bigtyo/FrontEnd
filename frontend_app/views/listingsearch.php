<div class="properties-rows" id="listings" style="display:none">
    <div class="row">
        <?php if(count($listing) == 0) {?>
        <img src="<?php echo NODE_URL."notfound.jpg"; ?>"  />
        <?php }else{
          foreach ($listing as $property) { ?>
            <div class="property span9">
                    <div class="row">
                            <div class="span3">
                                    <div class="image">
                                            <div class="content">
                                                    <a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL))."-".$property->LISTINGID ?>">
                                                    <img width="570" height="425"
                                                    src="<?php echo NODE_URL; ?>getimagelisting?id=<?php echo $property->LISTINGID; ?>"
                                                    class="thumbnail-image" alt="15">
                                                    </a>
                                            </div>
                                            <!-- /.content -->
                                    </div>
                                    <!-- /.image -->
                            </div>
                            <div class="body span6">
                                    <div class="title-price row">
                                            <div class="title span4">
                                                    <h2><a href="<?php echo base_url()."property/".url_title(strtolower($property->JUDUL))."-".$property->LISTINGID ?>"><?php echo $property->JUDUL ?></a></h2>
                                            </div>
                                            <!-- /.title -->
                                            <div class="price">
                                                    <?php echo get_rupiah($property->HARGA) ?>
                                            </div>
                                            <!-- /.price -->
                                    </div>
                                    <!-- /.title -->
                                    <div class="location"><?php echo $property->lokasi; ?></div>
                                    <!-- /.location -->
                                    <div class="body">
                                            <p><?php echo $property->DESCRIPTION; ?></p>
                                    </div>
                                    <!-- /.body -->
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
                                            <div class="more-info">
                                                    <a href="property-detail.html">More Info<i
                                                    class="icon icon-normal-right-arrow-circle"></i></a>
                                            </div>
                                    </div>
                                    <!-- /.info -->
                            </div>
                            <!-- /.body -->
                    </div>
                    <!-- /.row -->
            </div>
            <?php }
        }?>
            <!-- /.property -->
    </div>
    <!-- /.row -->
</div>