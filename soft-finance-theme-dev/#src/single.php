<?php
/*
	Template Name: Новости
*/
get_header('inside-page'); ?>

	<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">

					<?php $bg_img = get_field('bg_img'); ?>
                    <div class="inner-page__img" style="background-image: url(<?php echo esc_url($bg_img['url']); ?>);"></div>

				</div>   
			</aside>

			<section class="inner-page">
				<div class="inner-page__wrap">

					<div class="inner-page news">

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

						<h1>

                            <?php 
                                if ( get_field('alt_zagolovok') ) {
                                    the_field('alt_zagolovok');
                                } else {
                                    the_title(); 
                                } 
                            ?>
                        
                        </h1>
  
 
                        <?php the_content(); ?>
						
						<?php  
                        $uslugi = get_field('uslugi'); 
                        if( $uslugi ): ?> 

						<div class="product-line__list">

                             <?php foreach( $uslugi as $post): ?> 
                                <?php setup_postdata($post); ?> 

                                    <div class="product-line__item">
 
                                        <div class="image">
                                            <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?> " alt="">
                                        </div>

                                        <div class="content">
                                            <p class="title"><?php the_title(); ?></p>

                                            <p><?php the_field('price'); ?></p>

                                            <a href="<?php the_permalink(); ?>">Подробнее</a>
                                        </div>
 
                                    </div>
                            	<?php endforeach; ?> 
                            <?php wp_reset_postdata(); ?> 

						</div>	
                        <?php endif; ?>

					</div>
				</div>

			</section>

 

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>
			
		</article>
	</main>

<style>
<?php the_field('css'); ?>
</style>

<?php get_footer(); ?> 