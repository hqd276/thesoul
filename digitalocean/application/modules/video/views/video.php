<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/gallery.css">

<div class="bg-white container">
	<h2 class="text-uppercase">Video</h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().'video'?>">Video</a>
	<hr>

	<div class="row col-md-12 wrapper-parent">
        <?php foreach ($list_items as $key => $value) {?>
            <div class="col-xs-12 col-md-3">
                <div class="thumbnail">
                    <div class="video-container">
                        <iframe class="video" width="100%" height="150" src="https://www.youtube.com/embed/<?php echo $value['link']?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <br>
                    <?php echo $value['title']?>
                </div>
          </div>
        <?php }
        ?>
    </div>
	<div class="clearfix"></div>
</div>