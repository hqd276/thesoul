<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/about.css');?>">
<div class="container">
    <img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">

	<div class="container aboutus-title">
        <h1><?php echo $about['data']->name?></h1>
        <p><?php echo $about['data']->description?></p>
  	</div>
	<div class="container"><?php echo $about['data']->detail?></div>
</div>