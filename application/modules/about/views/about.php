<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/about.css');?>">
<div class="container">
    <h1><?php echo $setting['contact']['data']->name;?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>" target="">Trang chủ</a></li>
        <li><a href="<?php echo base_url('about');?>" target=""><b><?php echo $setting['contact']['data']->name;?></b></a></li>
    </ol>

	<div class="container aboutus-title">
        <h1> <i class="fa fa-road"></i><?php echo $about['data']->name?></h1>
        <p><?php echo $about['data']->description?></p>
  	</div>
	<div class="container"><?php echo $about['data']->detail?></div>
</div>