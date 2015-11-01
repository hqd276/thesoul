<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container">
  	<h1><?php echo $title?></h1>
  	<ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>" target="">Trang chủ</a></li>
        <li class="active"><a href="<?php echo base_url('product/'. $slug);?>" target=""><b><?php echo $title?></b></a></li>
  	</ol>

	<div class="news-form col-md-12">
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
	<div class="clearfix"></div>
</div>