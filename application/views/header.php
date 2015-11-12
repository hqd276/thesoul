<header>
  <nav class="navbar container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <div class="social text-right">
        <a href=""><i class="fa fa-skype"></i></a>
        <a href=""><i class="fa fa-google-plus"></i></a>
        <a href=""><i class="fa fa-facebook"></i></a>
      </div>
          <ul class="nav navbar-nav text-uppercase">
            <li class="<?php if($page=='about') echo 'active';?>"><a href="<?php echo base_url('ve-chung-toi');?>">Giới thiệu</a></li>
            <li class="<?php if($page=='product') echo 'active';?>"><a href="<?php echo base_url('danh-muc-san-pham');?>">Sản phẩm</a></li>
            <li class="<?php if($page=='order') echo 'active';?>"><a href="<?php echo base_url('order');?>">Đặt hàng</a></li>
            <li class="<?php if($page=='news') echo 'active';?>"><a href="<?php echo base_url('tin-tuc');?>">Tin tức</a></li>
            <li class="<?php if($page=='contact') echo 'active';?>"><a href="<?php echo base_url('lien-he');?>">Liên hệ</a></li>
            <li class="<?php if($page=='pricelist') echo 'active';?>"><a href="<?php echo base_url('pricelist');?>">Bảng giá</a></li>
            <li class="<?php if($page=='gallery') echo 'active';?>"><a href="<?php echo base_url('thu-vien-anh');?>">Ảnh ọt</a></li>
          </ul>
        
      </div><!-- /.navbar-collapse -->
  </nav>
</header>