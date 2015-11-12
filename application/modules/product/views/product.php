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
				<div class="item">
					<div class="col-md-4">
						<img class="img-responsive" src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
					</div>
					<div class="col-md-8">
						<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
						<p><?php echo split_char($value['description'],150,1)." ..."?></p>
						<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>" class="text-uppercase more pull-right">Chi tiết</a>
					</div>
					
				</div>
			<?php }
			?>
		</div>
	</div>
	<div class="clearfix"></div>
</div>