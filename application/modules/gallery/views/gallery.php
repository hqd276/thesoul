<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/gallery.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.css">

<style type="text/css">
    .ekko-lightbox .modal-dialog {
    	width: 70% !important;
    }
</style>

<div class="container">
    <h1>Thư viện ảnh</h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>" target="">Trang chủ</a></li>
        <li><a href="<?php echo base_url().'gallery'?>" target=""><b>Thư viện ảnh</b></a></li>
    </ol>

	<div class="row col-md-12 wrapper-parent">
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