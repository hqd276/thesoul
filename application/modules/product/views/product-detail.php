<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container">
  	<h1><?php echo $title?></h1>
  	<ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>" target="">Trang chủ</a></li>
        <li><a href="<?php echo base_url('product');?>" target="">Sản phẩm</a></li>
        <li><a href="<?php echo base_url('product/'. $cat['slug']);?>" target=""><b><?php echo $cat['title']?></b></a></li>
  	</ol>


	<div class="col-md-12 news-detail">
		<p class="description"><i><strong> <?php echo $item['description']?></strong></i></p>
		<hr>
		<img class="img-responsive col-md-12" src="<?php echo base_url().'uploads/product/'.$item['image']?>">		
		<hr>
        <div class="detail" id="detail"><?php echo $item['detail']?></div>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
		<!-- <span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> --> 
		<hr>
		<!--
		<div class="share-social">
			Thích và chia sẻ bài viết này :<br>
			<div class="col-sm-6">
				<div class="fb-share-button" data-href="<?php echo base_url().'chi-tiet-san-pham/'.$item['slug']?>" data-layout="button_count"></div>
				<div class="fb-like" data-href="<?php echo base_url().'chi-tiet-san-pham/'.$item['slug']?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
			</div>
			<div class="col-sm-6">
				<a class="twitter-share-button twitter-count-horizontal" href="<?php echo base_url().'chi-tiet/'.$item['slug']?>">Tweet</a>
				<div class="g-plus" data-action="share"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<hr>
		-->
		<div class="fb-comments" data-href="<?php echo base_url().'chi-tiet-san-pham/'.$item['slug']?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
		<hr>
		<ul class="list-unstyled other-news">
		<?php if (count($other_product)>0) {
			foreach ($other_product as $key => $value) {?>
				<li class="col-sm-6">
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