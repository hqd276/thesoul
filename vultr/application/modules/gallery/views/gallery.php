<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/gallery.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.css">

<style type="text/css">
    .ekko-lightbox .modal-dialog {
    	width: 40% !important;
    }
</style>

<div class="container">
    <img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">

	<div class="col-md-12 wrapper-parent">
        <?php foreach ($list_items as $key => $value) {?>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <a href="<?php echo base_url("uploads/gallery/".$value['image']); ?>" data-toggle="lightbox" data-gallery="multiimages" data-title="<?php echo $value['title'] ?>" data-parent=".wrapper-parent">
                        <img src="<?php echo base_url("uploads/gallery/thumbs/".$value['image']); ?>" class="img-responsive">
                    </a>
                    <!-- <div class="caption text-center">
                        <h4><?php echo $value['title'] ?></h4>
                    </div> -->
                </div>
          </div>
        <?php }
        ?>
    </div>
	<div class="clearfix"></div>
</div>

<script src="<?php echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.js"></script>

<script type="text/javascript">
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                always_show_close: true
            });
        });
    });
</script>