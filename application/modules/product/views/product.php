<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/product.css">

<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">
	<div class="row">
	  	<div class="menu-left col-sm-3">
	  		<h3 class="text-uppercase text-center"><?php echo $title?></h3>
	  		<ul class="list-unstyled">
	  			<?php foreach ($child_category as $k => $v) {?>
	  			<li><a href="<?php echo base_url('danh-muc-san-pham/'.$v['slug']);?>"><?php echo $v['name']?></a></li>
	  			<?php }
				?>
	  		</ul>
	  	</div>
		<div class="product-form col-sm-9 wrapper-parent">
			<?php foreach ($list_product as $key => $value) {?>
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
			<?php }
			?>
			<div class="clearfix"></div>
			<nav>
			  <ul class="pager">
			    <li class="previous <?php if ($link_prev=='#') echo 'disabled'?>"><a href="<?php echo $link_prev;?>"><span aria-hidden="true">&larr;</span> Trước</a></li>
			    <li class="next <?php if ($link_next=='#') echo 'disabled'?>"><a href="<?php echo $link_next;?>">Sau <span aria-hidden="true">&rarr;</span></a></li>
			  </ul>
			</nav>
		</div>
	</div>
	<div class="clearfix"></div>
</div>