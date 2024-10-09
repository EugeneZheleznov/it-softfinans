<?php
/*
	Template Name: Проекты
*/
get_header('inside-page'); ?>

	<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">
					<div class="inner-page__img projects"> 
					</div>  
				</div>
			</aside>

			<section class="inner-page">
				<div class="inner-page__wrap">

					<div class="inner-page projects">

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
 
						<?php 
							global $post;

							$mypost = get_posts( [
								'numberposts' => -1,
								'post_type'   => 'projects', 
								'orderby'     => 'date',
								'order'       => 'ASC',
							] ); 
						?>

						<div class="projects__list">

						<?php foreach ($mypost as $post) : setup_postdata ($post); ?>
				
							<div class="projects__item">

								<div class="projects__img">
									<img src="<?php the_post_thumbnail_url() ?>" alt="">
								</div>

								<div class="projects__text">
									<?php the_field('kratkoe_opisanie'); ?>

									<a href="<?php the_permalink(); ?>">Подробнее</a>
								</div>

							</div>
								 
						<?php 
							endforeach; 
							wp_reset_postdata();
						?>	
				 
						</div>
 

					</div>
				</div>

			</section>

 

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>
			
		</article>
	</main>

<?php get_footer(); ?>