<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">
  	
	<div class="news-content ">
		
			<?php foreach ($list_news as $key => $value) {?>
				<div class="item">
					<div class="col-md-2">
						<img src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
					</div>
					<div class="col-md-10">
						<a href="<?php echo base_url().'chi-tiet-tin/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
						<p><?php echo split_char($value['description'],150,1)." ..."?></p>
						<a href="<?php echo base_url().'chi-tiet-tin/'.$value['slug']?>" class="btn btn-danger pull-right">Xem tiếp</a>
					</div>
					
				</div>
			<?php }
			?>
	
	</div>
</div>