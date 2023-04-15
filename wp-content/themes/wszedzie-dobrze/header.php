<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php the_title(); ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="format-detection" content="telephone=no">

    <link href="https://fonts.googleapis.com" rel="preconnect" crossorigin>
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"/>
	<?php
	wp_head();
	?>

</head>

<header>

	<?php
	if ( function_exists( "the_custom_logo" ) ) {
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo           = wp_get_attachment_image_src( $custom_logo_id );
	}

	?>
    <div class="logo mobile-logo"><a href="<?php echo home_url(); ?>"><img class="logo-img" src="<?php echo $logo[0]
			?>" alt=""></a></div>
    <div class="menu">
        <div class="menu-right">
			<?php

			wp_nav_menu(
				array(
					'menu'           => 'primary',
					'container'      => '',
					'theme_location' => 'primary',
					'items_wrap'     => '%3$s'
				)
			);
			?>
        </div>

        <div class="logo"><a href="<?php echo home_url(); ?>"><img class="logo-img" src="<?php echo $logo[0] ?>" alt=""></a>
        </div>
        <div class="btn cancel-btn">
            <i class="fas fa-times close-btn"></i>
        </div>
        <div class="menu-left">
			<?php

			wp_nav_menu(
				array(
					'menu'           => 'secondary',
					'container'      => '',
					'theme_location' => 'secondary',
					'items_wrap'     => '%3$s'
				)
			);
			?>

        </div>
    </div>

    <div class="menu-btn btn">
        <i class="fas fa-bars menu-btn"></i>
    </div>
</header>

