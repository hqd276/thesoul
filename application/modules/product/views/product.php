<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/product.css">
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
		<div class="product-form col-sm-9">
			<?php foreach ($list_product as $key => $value) {?>
				<div class="item col-sm-3">
					<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>">
						<img class="img-responsive" src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
					</a>
				</div>
			<?php }
			?>
		</div>
	</div>
	<div class="clearfix"></div>
</div>