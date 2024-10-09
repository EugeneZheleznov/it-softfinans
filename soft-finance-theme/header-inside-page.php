<?php
/*
    Header для внутренних страниц
*/
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" ></script>
	<meta itemprop="keywords" name="keywords" content="<?php the_field('keywords'); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'soft-finance-theme' ); ?></a>

	<header id="masthead" class="header__inside_page site-header">
		<div class="header__wrap">
			<div class="site-branding header__logo">
				<?php the_custom_logo(); ?>
			</div>
			<nav id="site-navigation" class="main-navigation header__nav">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Меню', 'soft-finance-theme' ); ?></button> 
				<?php
					// wp_nav_menu(
					// 	array(
					// 		'theme_location' => 'main_menu',
					// 		'container'=> false, // обертка списка, тут не нужна
					// 		'menu_id' => 'main_menu', 
					// 		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
					// 	)
					// );
				?>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
			<div class="header__btn data__Modal">
				<a href="tel:<?php the_field('tel', 'options' ); ?>" class="tel"><?php the_field('tel', 'options' ); ?></a>  
				<div onclick="getTitle(this)" class="call-back popup__open get__mailTitle get__title">Обратный звонок</div>
			</div>

			<div class="mobile__menu">
				<div class="icon__menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div> 
			<div class="mobile__wrap">
				<nav class="mobile-navigation"> 
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'mobile-menu',
							'menu_class'        => 'mobile-menu',
						)
					);
					?>
				</nav> 
				<p>Тел.: <a href="tel:<?php the_field('tel', 'options' ); ?>"><?php the_field('tel', 'options' ); ?></a> </p>
			</div>

		</div>
	</header>