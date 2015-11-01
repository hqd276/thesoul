<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">

<div class="container">
	<section class="banner">
		<div id="tpCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<?php foreach ($banners as $key => $value){?>
				<li data-target="#tpCarousel" data-slide-to="<?php echo $key?>" class="<?php echo ($key==0)?"active":"" ?>"></li>
			   	<?php } ?>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php foreach ($banners as $key => $value){?>
			  	<div class="item <?php echo ($key==0)?"active":"" ?>" >
			    	<img src="<?php echo base_url("uploads/banner/".$value['image']); ?>">
			    	<div class="carousel-caption">
			        	<!-- <h1><?php echo $about['data']->name?></h1>
		                <p><?php echo split_char($about['data']->description,200,'...')?></p>
		                <p><a href="<?php echo base_url("about"); ?>" target="" class="btn btn-lg btn-primary">Read more</a></p> -->
			      	</div>
			    </div>
			   	<?php } ?>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#tpCarousel" role="button" data-slide="prev">
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#tpCarousel" role="button" data-slide="next">
				<span class="sr-only">Next</span>
			</a>
		</div>
	</section>
	
	<section class="hot-product">
		<img class="header-hot" src="<?php echo base_url();?>assets/images/hotproduct.png">
		<div class="row">
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/1.jpg">
				</a>
			</div>
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/2.jpg">
				</a>
			</div>
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/1.jpg">
				</a>
			</div>
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/2.jpg">
				</a>
			</div>
		</div>
	</section>

	<section class="customer">
		<div class="header-customer">
			<div class="text-center"><span class="text-uppercase">Khách hàng tiêu biểu</span></div>
		</div>
		<div class="row">
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/ex1.jpg">
				</a>
			</div>
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/ex2.jpg">
				</a>
			</div>
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/ex1.jpg">
				</a>
			</div>
			<div class="col-sm-3 col-xs-6 item">
				<a href="">
					<img src="<?php echo base_url();?>assets/images/ex2.jpg">
				</a>
			</div>
		</div>
	</section>

	<section class="news-about">
		<div class="row">
			<div class="news-home col-sm-6">
				<div class="header text-uppercase">
					<a href="">Tin tức</a>
				</div>
				<ul class="media-list">
						<li class="media">
					  	<div class="media-left">
						    <a href="#">
						      <img class="media-object" src="<?php echo base_url();?>assets/images/mam-non.jpg" alt="...">
						    </a>
					  	</div>
					  	<div class="media-body">
						    <h4 class="media-heading">Tiêu đề tin</h4>
						    <p>Nội dung tin. Nội dung tin. Nội dung tin. Nội dung tin. Nội dung tin. Nội dung tin. </p>
					  	</div>
				  	</li>
				  	<li class="media">
					  	<div class="media-left">
						    <a href="#">
						      <img class="media-object" src="<?php echo base_url();?>assets/images/mam-non.jpg" alt="...">
						    </a>
					  	</div>
					  	<div class="media-body">
						    <h4 class="media-heading">Tiêu đề tin</h4>
						    <p>Nội dung tin. Nội dung tin. Nội dung tin. Nội dung tin. Nội dung tin. Nội dung tin. </p>
					  	</div>
				  	</li>
				</ul>
			</div>
			<div class="about-us col-sm-6">
				<div class="header text-uppercase">
					<a href="">Về chúng tôi</a>
				</div>
				<!-- Nav tabs -->
			  	<ul class="nav nav-tabs text-uppercase" role="tablist">
				    <li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">Vắn tắt</a></li>
				    <li role="presentation"><a href="#co-op" aria-controls="co-op" role="tab" data-toggle="tab">Hợp tác</a></li>
				    <li role="presentation"><a href="#video" aria-controls="video" role="tab" data-toggle="tab">Video</a></li>
			  	</ul>

				  <!-- Tab panes -->
			  	<div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="about">
				    	<div class="panel panel-default">
							<div class="panel-body">
								<h3 class="text-uppercase text-center"><?php echo $about['data']->name?></h3>
								<div>
									<?php echo $about['data']->detail?>
								</div>
							</div>
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="co-op">
				    	<div class="panel panel-default">
							<div class="panel-body"></div>
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="video">
				    	<div class="panel panel-default">
							<div class="panel-body"></div>
						</div>
				    </div>
			  	</div>
				
			</div>
		</div>
	</section>
</div>