<?php get_header(); ?>
<div class="page-wrap">
<div class="banner">
<div class="parallax-window" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url('full'); ?>">

</div>
<?php if(have_posts()){
	while (have_posts()) {
		the_post(); ?>


	<div class="container">
		<h1><?php the_field('para-title'); ?></h1>
		<p><?php the_content(); ?></p>
	</div>
</div>

<?php

	}
}

?>

<section class="dark-sec">


<div class="container">

	<p>De senaste bilderna från vårt instagramkonto</p>

	<div class="row" id="insta-row">

	<div id="instafeed"></div>
</div>

<div class="row">
	<div class="col-md-12">
		<div class="store-location-title">
		<span class="glyphicon glyphicon-map-marker"></span>
	<h2>VÅRA BUTIKER</h2>
</div>
</div>
<div class="col-md-6">
	<div class="store-item">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16443.48934616659!2d16.177669418923955!3d58.9911567686663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465eb7eb01b0eef7%3A0xc18b0631a9ae303a!2sKatrineholm!5e0!3m2!1sen!2sse!4v1479374506851" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<h4>Butik 1</h4>
	<button class="btn-success">Kontakta oss idag</button>
</div>
</div>
<div class="col-md-6">
	<div class="store-item">
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d64158.59467113043!2d17.588408122452414!3d59.83326085155626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465fcbfb8532ab8d%3A0xaa4fe90a85820807!2sUppsala!5e0!3m2!1sen!2sse!4v1479374578772" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<h4>Butik 2</h4>
	<button class="btn-success">Kontakta oss idag</button>
</div>
</div>
</div>




</div>

</section>

<section id="varumarken">

	<!-- Slider main container -->
	<div class="swiper-container">
	    <!-- Additional required wrapper -->
	    <div class="swiper-wrapper">
	        <!-- Slides -->

					<?php

					$args = array( 'post_type' => 'varum', 'posts_per_page' => -1);
					$query = new WP_Query($args);

					while ($query->have_posts()) {
						$query->the_post();?>
						<div class="swiper-slide">
							<?php the_post_thumbnail('small');?>

						</div>
					 <?php } ?>
	    </div>
	</div>


</section>
</div>

<script>


$(document).ready(function(){


var userFeed = new Instafeed({
		get: 'user',
		userId: '520335126',
		accessToken: '520335126.b2575d0.1641a3b799ff4034bbb8792abb87abd9',
		resolution: 'low_resolution',
		 template: '<a href="{{link}}" class="insta-item col-md-4 col-sm-4"><img src="{{image}}" /></a>',
		limit: 6
});

userFeed.run();

var mySwiper = new Swiper('.swiper-container', {
    speed: 400,
		autoplay: 4000,
		slidesPerView:4,
    spaceBetween: 100
});


//accesstoken 2668a5b210b141039662f32f5d6c7080
	console.log();
})

</script>

<?php get_footer(); ?>
