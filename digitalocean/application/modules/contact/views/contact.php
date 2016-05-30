<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/contact.css">
<div class="container">
	<img class="adv-top" src="<?php echo base_url();?>assets/images/ad.jpg">

	<img class="adv-contact" src="<?php echo base_url();?>assets/images/banner3.jpg">
	<div class="contact-block text-center">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="contact-btn text-uppercase pull-left">
				Liên hệ qua hotline<br>
				<i class="fa fa-phone"></i>0979680346
			</div>
			<div class="contact-btn text-uppercase pull-right">
					Liên hệ đặt hàng  <br>
					qua Facebook
			</div>
			<div class="clearfix"></div>
			<div class="contact-detail">
				<?php echo $setting['contact']['data']->detail;?>
			</div>
			<hr>
			<h4 class="contact-btn text-uppercase ">hướng dẫn map</h4>
			<div class="map">
				<div id="map"></div>
			</div>

			<div class="contact-detail">
				<?php echo $setting['contact']['data']->description;?>
			</div>
			<hr>
		</div>
	</div>
</div>
<div class="clearfix"></div>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>

<script>
	//load map
	function initMap() {
	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 13
	  });

	  // Try HTML5 geolocation.
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(function(position) {
	      var pos = {
	        // lat: position.coords.latitude,
	        // lng: position.coords.longitude
	        lat: 20.971934,
	        lng: 105.7742316
	      };
	      var marker = new google.maps.Marker({
		    position: pos,
		    map: map,
		    title: '5 Kiến trúc sư!'
		  });
	      map.setCenter(pos);
	    }, function() {
	    });
	  }
	}

    $(document).ready(function(){
    	initMap();
		//fix loi map chi hien thi o tab 1
		// $('a[href="#contact"]').on('shown.bs.tab', function (e) {
		// 	initMap();
		// });
	});
</script>