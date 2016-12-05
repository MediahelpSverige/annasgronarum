<!DOCTYPE html>
<html>
<head>
	<title>Design - Commerce</title>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/bundle.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bower_components/parallax.js/parallax.min.js"></script>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Didact+Raleway|Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.0/css/swiper.min.css">


	<?php wp_head();?>
</head>
<header class="top-header">
<?php $args; ?>
<div class="nav-menu">
<div class="flex-item" id="logo"><img src="<?php header_image(); ?>"></div>
<?php wp_nav_menu($args = array('menu' => 'main_nav', 'menu_class' => 'flex-item', 'container' => 'div', 'container_class' => '')); ?>
	</div>
</header>
<body>
	<script type="text/javascript">

</script>
