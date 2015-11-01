<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/contact.css">
<div class="container">
    <h1><?php echo $setting['contact']['data']->name;?></h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>" target="">Trang chủ</a></li>
        <li><a href="<?php echo base_url('contact');?>" target=""><b><?php echo $setting['contact']['data']->name;?></b></a></li>
    </ol>

	<form class="form-horizontal  col-sm-8" role="form" method="post" action="">
		<span class="success">
			<?php 
			if(isset($b_Check))
				if ($b_Check){
					echo "Send Success!";
				}else{
					echo "Send Fail";
				}
			?>
		</span>
		<?php echo form_error('email'); ?>
		<?php echo form_error('content'); ?>

		<div class="col-sm-12">
			<?php echo $setting['contact']['data']->description;?>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			  	<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Phone</label>
			<div class="col-sm-10">
			  	<input type="" class="form-control" id="inputEmail3" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Content</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="content" placeholder="Content"><?php echo set_value('content'); ?></textarea>
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Send</button>
			</div>
		</div>
	</form>
	<div class="col-sm-4">
		
		<div>
			<?php echo $setting['contact']['data']->detail;?>
		</div>
	</div>
</div>
<div class="clearfix"></div>