<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">

  	<h1><?php echo $title?></h1>

	<div class="col-md-12 news-detail">
		<p class="description"><i><strong> <?php echo $item['description']?></strong></i></p>
		<hr>
		<img class="img-responsive col-md-6 col-md-offset-3" src="<?php echo base_url().'uploads/product/'.$item['image']?>">		
		<div class="clearfix"></div>
		<hr>
        <div class="detail" id="detail"><?php echo $item['detail']?></div>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
		<span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> 
		<hr>
		
		<ul class="list-unstyled other-news">
		<?php if (count($other_product)>0) {
			foreach ($other_product as $key => $value) {?>
				<li class="col-sm-3">
					<a href="<?php echo base_url().'chi-tiet-san-pham/'.$value['slug']?>"> 
						<img class="pull-left" src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
						<?php echo $value['title']?>
					</a>
				</li>
		<?php	}
		}?>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>