<h1><a class="logo" href="<?php echo base_url('admin');?>"> Administrator</a></h1>

<nav class="navbar navbar-default " role="navigation">

	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home"></span></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav text-uppercase">
		  	
		    <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tin tức <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<?php echo base_url('admin/category/index/0');?>">Quản lý danh mục tin tức</a></li>
                  	<li><a href="<?php echo base_url('admin/news/index/0');?>">Quản lý tin</a></li>
                  	<li><a href="<?php echo base_url('admin/news/add/0');?>">Thêm tin mới</a></li>
	          	</ul>
	        </li>
	        
	        <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<li><a href="<?php echo base_url('admin/category/index/1');?>">Quản lý danh mục sản phẩm</a></li>
                  	<li><a href="<?php echo base_url('admin/product/index/0');?>">Quản lý sản phẩm</a></li>
                  	<li><a href="<?php echo base_url('admin/product/add/0');?>">Thêm sản phẩm mới</a></li>
	          	</ul>
	        </li>
	        <li>
	        	<a href="<?php echo base_url();?>admin/banner">Slide Show</a>
	        </li>
          	<li>
	          	<a href="<?php echo base_url();?>admin/gallery">Thư viện ảnh</a>
          	</li>
	        <li class="dropdown">
	          	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hệ thống <span class="caret"></span></a>
	          	<ul class="dropdown-menu text-capitalize" role="menu">
	          		<!-- <li><a href="<?php echo base_url();?>admin/support">Supports</a></li> -->
	          		<!-- <li><a href="<?php echo base_url();?>admin/booking">Booking</a></li> -->
	          		<li><a href="<?php echo base_url();?>admin/page">Pages</a></li>
	          		<li><a href="<?php echo base_url();?>admin/setting">Settings</a></li>
	          	</ul>
          	</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
		<div class="user-info text-right col-md-4">
			Hi <span><strong><?php echo $user['email'];?></strong></span>!
			<a href="<?php echo base_url();?>logout">Đăng xuất</a> 
		</div>
	</div><!-- /.container-fluid -->
</nav>