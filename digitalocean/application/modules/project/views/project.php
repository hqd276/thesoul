<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/gallery.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.css">
<style type="text/css">
    .ekko-lightbox .modal-dialog {
        width: 70% !important;
    }
</style>

<div class="container-fluid cover">
    <div class="container-fluid dim">
      <div class="container">
        <div class="caption">
          <h1><?php echo $category['name']?></h1>
        </div>
        <div class="breadcrumb">
          <ul>
            <li><a href="<?php echo base_url();?>" target="">Home</a></li>
            <li><a> <i class="fa fa-angle-right"></i></a></li>
            <li><a href="#" target="">Projects</a></li>
            <li><a> <i class="fa fa-angle-right"></i></a></li>
            <li><a href="<?php echo base_url('project/'.$category['slug']);?>" target=""> <b><?php echo $category['name']?></b></a></li>
          </ul>
        </div>
      </div>
    </div>
</div>

<div class="bg-white container" style="margin-top:20px;">
	<div class="row col-md-12 wrapper-parent">
        <?php foreach ($list_items as $key => $value) {?>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <a href="<?php echo base_url("uploads/project/".$value['image']); ?>" data-toggle="lightbox" data-gallery="multiimages" data-title="<?php echo $value['title'] ?>" data-parent=".wrapper-parent">
                        <img src="<?php echo base_url("uploads/project/thumbs/".$value['image']); ?>" class="img-responsive">
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