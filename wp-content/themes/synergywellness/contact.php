<?php

// Template Name: Contact

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<div class="content">
	<div id="address-cont"><?php the_content(); ?></div>
	<div id="map-cont">
		<div id="map-wrap"><div id="map_canvas"></div></div>
	</div>
	<div id="form-cont"><?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]'); ?></div>
	<div id="signup-cont"><?php get_sidebar(); ?></div>
</div>

<?php endwhile; ?>


<?php get_footer(); ?>

<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?&sensor=false">
</script>


<script>
	$(document).ready(function() {
		initialize();
	});

	
	function initialize() {
	  // var image = src="/system/images/map-pin.png";
	  var myOptions = {
	    center: new google.maps.LatLng(32.778399, -79.93382) ,
	    zoom: 15,
	    mapTypeId: google.maps.MapTypeId.ROADMAP ,
	    scaleControl: false,
	    panControl: false,
	    mapTypeControl: false,
	    streetViewControl: false,


	  };
	  var map = new google.maps.Map(document.getElementById("map_canvas"),
	      myOptions);

	  var marker = new google.maps.Marker({
	      position: map.getCenter(),
	      map: map,
	    });

	}
</script>