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
	<nav>
	  <ul class="pager">
	    <li class="previous <?php if(!$older_link) echo 'disabled'?>"><a href="<?php echo ($older_link)?$older_link:'#'?>"><span aria-hidden="true">&larr;</span> Older</a></li>
	    <li class="next <?php if(!$newer_link) echo 'disabled'?>"><a href="<?php echo ($newer_link)?$newer_link:'#'?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
	  </ul>
	</nav>
</div>