<?php
/*
	Template Name: Решения для бизнеса
*/
get_header('inside-page'); ?>

	<main class="main single-product">
		<article>
  
            <aside class="inner-page">
                <div class="inner-page__wrap">

                    <?php $bg_img = get_field('bg_img'); ?>
                    <div class="inner-page__img" style="background-image: url(<?php echo esc_url($bg_img['url']); ?>);"></div>

                </div>
            </aside>


            <section class="inner-page">
                <div class="inner-page__wrap">

                    <div class="inner-page">

                        <?php $args = array(
                            'theme_location' => 'menu_inner_page',
                            'container' => false, // обертка списка, тут не нужна
                            'menu_id' => 'menu-inner-page',
                            'items_wrap' => '<ul id="%1$s" class="top-nav %2$s">%3$s</ul>',
                            'menu_class' => 'menu_inner_page'
                            );
                            wp_nav_menu($args);
                        ?>
                        <?php
                            if (function_exists('yoast_breadcrumb')) {
                                yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
                            }
                        ?>



                        <div class="product">

                            <h1 itemprop="name"><?php the_title() ?></h1>

                            <div class="slider__product">
                                <div class="swiper-container imgProduct">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?> " alt="">
                                        </div>
                                         
                                        <div class="swiper-slide">
                                                    
                                        </div> 
                                    </div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>

                                <?php
                                // Если в галерее нет изображений, то не выводим
                                ?>
                                    <div thumbsSlider="" class="swiper-container thumbProduct">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                               
                                            </div>
                                            <?php //if ($product_gallery_ids) : ?>

                                                <?php    ?>

                                                    <div class="swiper-slide">
                                                         
                                                    </div>
 

                                                <?php //endforeach; ?>
                                            <?php //endif; ?>
                                        </div>
                                    </div>
                                <?php //endif; ?>
                            </div>

                            <div class="sell__product">


                                <p class="short-description"><?php the_excerpt(); ?></p>

                                <div class="price__wrap">

                                    <div class="add-cart data__Modal"> 
 
                                        <div style="display: none;" class="get__mailTitle">Купить - <?php the_title() ?></div>
                                        <div style="display: none;" class="get__title">Оставить заявку</div>
                                        <div onclick="getTitle(this)" class="add_to_cart_btn btn__buy popup__open" type="submit">Купить</div> 
 
                                    </div>

                                    <div class="price"><?php the_field('price'); ?></div>

                                    
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </section>


            <div class="product__info">

                <div class="list__btn">
                    <div class="item__btn label active" data-target="#content-1">
                        <p>Описание</p>
                    </div>

                    <?php if ( get_field('text_one') || get_field('tarif') ) : ?>
                    <div class="item__btn label" data-target="#content-2">
                        <p><?php the_field('name_first_tab'); ?></p>
                    </div>
                    <?php endif; ?>

                    <?php //if ( get_field('text_two') ) : ?>
                    <div class="item__btn label" data-target="#content-3">
                        <p><?php the_field('name_second_tab'); ?></p>
                    </div>
                    <?php //endif; ?>
                </div>

                <div class="product__wrap">
                    <div class="info__product">

                        <div class="accordeon">
    
                            <div class="block-list description tab active" id="content-1">
                                <div class="item description">
                                    <?php the_content(); ?>
                                </div>
                            </div> 

                            <?php if ( get_field('text_one') || get_field('tarif') ) : ?>
                            <div class="block-list interface tab" data-target="two" id="content-2">
                                <div class="item description">
 
                                    <div class="card__list">

                                    <?php if( have_rows('tarif') ):?> 
                                        <?php while(have_rows('tarif')): the_row(); ?> 

                                        <div class="card__item">
                                            <div class="image">

                                                <?php if( get_sub_field('img') ): 
                                                    $image = get_sub_field('img');
                                                    $picture = $image['sizes']['large'];
                                                ?>
                                                    <img src="<?php echo $picture;?>" alt="">
                                                <?php else: ?>     
                                                    <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?> " alt="">
                                                <?php endif; ?>

                                            </div>

                                            <div class="text">
                                                <p class="name"><?php the_sub_field('name'); ?></p>
                                                <div class="text"><?php the_sub_field('text'); ?></div>
                                                <p class="price"><?php the_sub_field('price'); ?></p>
                                            </div>
                                        </div>

                                        <?php endwhile; ?>  
                                    <?php endif;?>

                                    </div>

                                    <?php if ( get_field('text_one')  ) : ?>
                                    <div class="block__text">
                                        <?php the_field('text_one'); ?>
                                    </div>
                                    <?php endif; ?>

                                </div>
                            </div>

                            <?php endif; ?>

                            <?php if ( get_field('text_two') || get_field('uslugi') ) : ?>
                            <div class="block-list interes tab" data-target="three" id="content-3">
                                <div class="interes__list">
 
                                <?php  
                                    $uslugi = get_field('uslugi'); 

                                        if( $uslugi ): ?> 
                                            <?php foreach( $uslugi as $post): ?> 
                                                <?php setup_postdata($post); ?> 

                                                <div class="interes__item">
 
                                                    <div class="image">
                                                        <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?> " alt="">
                                                    </div>

                                                    <div class="content">
                                                        <p class="title"><?php the_title(); ?></p>

                                                        <p><?php the_excerpt(); ?></p>

                                                        <a href="<?php the_permalink(); ?>">Подробнее</a>
                                                    </div>
 
                                                </div>

                                            <?php endforeach; ?> 
                                        <?php wp_reset_postdata(); ?> 
                                    <?php endif; ?>

                                    <?php if ( get_field('text_two')  ) : ?>
                                    <div class="block__text">
                                        <?php the_field('text_two'); ?>
                                    </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <?php endif; ?>

                        </div>

                    </div>

                    <div class="sidebar">
                        <div class="order__block data__Modal">
                            <div style="display: none;" class="get__mailTitle">Решение для бизнеса - <?php the_title() ?></div>
                            
                            <div class="image">
                                <img src="<?php echo the_post_thumbnail_url('thumbnail'); ?> " alt="">
                                <p class="title"><?php the_title() ?></p>
                            </div>
    
                            <p class="price">Стоимость: <span><?php the_field('price'); ?></span></p>
                            
                            <?php the_field('right_sidebar'); ?>

                            <div onclick="getTitle(this)" class="call-back popup__open get__title">Оставить заявку</div>
                        </div>
                    </div>
                </div>

            </div>
 

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>
			
		</article>
	</main>

 

<?php get_footer(); ?>