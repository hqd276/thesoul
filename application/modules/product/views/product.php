<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/product.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.css">

<style type="text/css">
    .ekko-lightbox .modal-dialog {
<<<<<<< Updated upstream
    	width: 40% !important;
    }
</style>
=======
    	width: 70% !important;
    }
</style>

>>>>>>> Stashed changes
<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">
	<div class="row">
	  	<div class="menu-left col-sm-3">
	  		<h3 class="text-uppercase text-center"><?php echo $title?></h3>
	  		<ul class="list-unstyled">
	  			<?php foreach ($child_category as $k => $v) {?>
	  			<li><a href="<?php echo base_url('danh-muc-san-pham/'.$v['slug']);?>"><?php echo $v['name']?></a></li>
	  			<?php }
				?>
	  		</ul>
	  	</div>
		<div class="product-form col-sm-9 wrapper-parent">
			<?php foreach ($list_product as $key => $value) {?>
				<div class="item col-sm-3">
<<<<<<< Updated upstream
					<a href="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>" data-toggle="lightbox" data-gallery="multiimages" data-title="<?php echo $value['title'] ?>" data-parent=".wrapper-parent">
=======
					<a  href="<?php echo base_url("uploads/product/".$value['image']); ?>" data-toggle="lightbox" data-gallery="multiimages" data-title="<?php echo $value['title'] ?>" data-parent=".wrapper-parent">
>>>>>>> Stashed changes
						<img class="img-responsive" src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
					</a>
				</div>
			<?php }
			?>
			<div class="clearfix"></div>
			<nav>
			  <ul class="pager">
			    <li class="previous <?php if ($link_prev=='#') echo 'disabled'?>"><a href="<?php echo $link_prev;?>"><span aria-hidden="true">&larr;</span> Trước</a></li>
			    <li class="next <?php if ($link_next=='#') echo 'disabled'?>"><a href="<?php echo $link_next;?>">Sau <span aria-hidden="true">&rarr;</span></a></li>
			  </ul>
			</nav>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
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