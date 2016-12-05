<?php get_header(1); ?>

<article class="single-page">

<div class="container">

	<?php if (have_posts()) {
		while (have_posts()) {
			the_post();
			the_title('<h1>', '</h1>');
			the_content();
		}
	} ?>


</div>

</article>
<?php get_footer(); ?>
