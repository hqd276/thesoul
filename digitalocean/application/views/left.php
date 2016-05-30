<ul>
	<?php foreach ($list_service as $key => $value) {?>
		<li class="title"><a href="<?php echo base_url('service/'.$value['slug']);?>"><?php echo $value['name']?></a>
			<ul class="list-unstyled service">
				<?php foreach ($value['items'] as $k => $v) {?>
					<li><a href="<?php echo base_url('detail/'.$v['slug']);?>"><?php echo $v['title']?></a>
				<?php }?>
			</ul>
		</li>
	<?php }?>
</ul>