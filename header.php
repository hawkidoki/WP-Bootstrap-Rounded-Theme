<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<?php wp_head(); ?>
</head>

<body>

<nav class="navbar navbar-lg navbar-expand-lg bg-white navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a>
        <button class="navbar-toggler navbar-toggler-right bg-none text-dark border-0" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'navbar-top',
                    'container'         => false,
                    'fallback_cb'       => false,
                    'menu_class'        => 'navbar-nav ml-auto',
                    'menu_id'           => ''
                ));
            ?>
        </div>
    </div>
</nav>
<div class="content-wrapper">