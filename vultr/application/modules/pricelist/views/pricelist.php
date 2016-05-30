<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pricelist.css');?>">
<div class="container">
    <img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">

	<div class="container aboutus-title">
        <div class="pricelist-title text-uppercase">Bảng size người lớn</div>
        <img class="adv-top" src="<?php echo base_url("uploads/settings/".$about['data']->image);?>">
        <div class="pricelist-title text-uppercase">Bảng size trẻ em</div>
        <img class="adv-top" src="<?php echo base_url("uploads/settings/".$about['data']->image1);?>">
  	</div>
	<div class="container"><?php echo $about['data']->detail?></div>
</div>