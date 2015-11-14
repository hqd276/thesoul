<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">

<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">
	<div class="news-content row">
		<div class="col-sm-3 menu-left ">
			<h3 class="text-uppercase text-center">Tin tức</h3>
	  		<ul class="list-unstyled">
	  			<?php foreach ($other_news as $k => $v) {?>
	  			<li><a href="<?php echo base_url('chi-tiet-tin/'.$v['slug']);?>"><?php echo $v['title']?></a></li>
	  			<?php }
				?>
	  		</ul>
		</div>
		<div class="col-sm-9 ">
			<h3 class="text-uppercase"><strong><?php echo $item['title']?></strong> </h3>
				<hr>
			<div class="news-detail">
				<p class="description"><i><strong> <?php echo $item['description']?></strong></i></p>
				<hr>
				<?php if($item['image']!=''){?>
				<img class="img-responsive col-md-8 col-md-offset-2" src="<?php echo base_url().'uploads/news/'.$item['image']?>">		
				<div class="clearfix"></div>
				<hr>
				<?php }?>
		        <div class="detail" id="detail"><?php echo $item['detail']?></div>
				<hr>
				<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
				<span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?>
				<hr>
			</div>
		</div>
	
	</div>
</div>