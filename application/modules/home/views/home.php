<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.css">

<style type="text/css">
    .ekko-lightbox .modal-dialog {
    	width: 40% !important;
    }
</style>

<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">

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
		<div class="row wrapper-parent">
			<?php foreach ($product_home as $key => $value){?>
			<div class="item">
				<div class="thumbnail">
					<a data-toggle="modal" data-target="#productModal_<?php echo $value['id']?>">
						<img class="img-responsive" src="<?php echo base_url().'uploads/product/thumbs/'.$value['image']?>">
					</a>
				</div>
			</div>
			<div class="modal fade" id="productModal_<?php echo $value['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title" id="myModalLabel"><?php echo $value['title']?></h4>
			      </div>
			      <div class="modal-body">
			      	<div class="col-sm-8">
			      	<!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li class="active"><a href="#image_detail_1" data-toggle="tab">Ảnh chi tiết 1</a></li>
					    <li ><a href="#image_detail_2" data-toggle="tab">Ảnh chi tiết 2</a></li>
					  </ul>
					<!-- Tab panes -->
					  <div class="tab-content">
					    <div class="tab-pane active" id="image_detail_1">
					    	<img class="img-responsive" src="<?php echo base_url().'uploads/product/'.$value['image_detail_1']?>">
					    </div>
					    <div class="tab-pane" id="image_detail_2">
					    	<img class="img-responsive" src="<?php echo base_url().'uploads/product/'.$value['image_detail_2']?>">
					    </div>
					  </div>
					</div>
					<div class="col-sm-4">
						<div><i><?php echo $value['description']?></i></div>
						<div><?php echo $value['detail']?></div>
					</div>
					<div class="clearfix"></div>
			      </div>
			    </div>
			  </div>
			</div>
			<?php }?>
		</div>
	</section>

	<section class="customer">
		<div class="header-customer">
			<div class="text-center"><span class="text-uppercase">Khách hàng tiêu biểu</span></div>
		</div>
		<div class="row wrapper-parent">
			<?php foreach ($partner as $key => $value){?>
			<div class="item">
				<div class="thumbnail">
					<a href="<?php echo base_url("uploads/member/".$value['image']); ?>" data-toggle="lightbox" data-gallery="multiimages" data-parent=".wrapper-parent">
						<img src="<?php echo base_url('uploads/member/thumbs/'.$value['image']);?>">
					</a>
				</div>
			</div>
			<?php }?>
		</div>
	</section>

	<section class="news-about">
		<div class="row">
			<div class="news-home col-sm-6">
				<div class="header text-uppercase">
					<a href="">Tin tức</a>
				</div>
				<ul class="media-list">
					<?php foreach ($news_home as $key => $value){?>
					<li class="media">
					  	<div class="media-left">
						    <a href="<?php echo base_url('chi-tiet-tin/'.$value['slug']);?>">
						      <img class="media-object" src="<?php echo base_url('uploads/news/thumbs/'.$value['image']);?>" alt="...">
						    </a>
					  	</div>
					  	<div class="media-body">
						    <h4 class="media-heading"><?php echo $value['title'] ?></h4>
						    <p><?php echo $value['description'] ?></p>
					  	</div>
				  	</li>
				  	<?php }?>
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

<script src="<?php echo base_url();?>assets/css/ekko-lightbox/ekko-lightbox.js"></script>

<script type="text/javascript">
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                always_show_close: true
            });
        });
    });
</script>