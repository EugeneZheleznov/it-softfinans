<?php
/*
	Template Name: Политика конфиденциальности
*/
get_header('inside-page'); ?>

	<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">
					<div class="inner-page__img mule-esb"> 
					</div>  
				</div>
			</aside>

			<section class="inner-page">
				<div class="inner-page__wrap">

					<div class="inner-page">

						<?php $args = array( 
							'theme_location' => 'menu_inner_page',  
							'container'=> false, // обертка списка, тут не нужна
						  	'menu_id' => 'menu-inner-page', 
							'items_wrap' => '<ul id="%1$s" class="top-nav %2$s">%3$s</ul>',
							'menu_class' => 'menu_inner_page' 		
					  		);
							wp_nav_menu($args);  
						?>
						<?php
							if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
							}
						?>
						<h1><?php the_title(); ?></h1>

						<div class="mule-esb__text">
							
							<?php the_content();?>

						</div>
 

					</div>
				</div>

			</section>

 

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>
			
		</article>
	</main>

<?php get_footer(); ?>