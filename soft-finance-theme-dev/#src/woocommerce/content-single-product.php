<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
?>

<?php
$product_image_id = $product->get_image_id(); // Главное изображение
$product_gallery_ids = $product->get_gallery_image_ids(); // галерея
$product_published_card = $product->get_date_created();
$id = $product->get_id(); // id текущего продукта 
?>

<?php /*
	echo '<pre>' ;
	echo var_dump($product_gallery_ids);
	echo '</pre>';
*/ ?>

<article>

	<aside class="inner-page">
		<div class="inner-page__wrap">
			<div class="inner-page__img product_single"></div>
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



				<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>

					<h1 itemprop="name"><?php the_title() ?></h1>

					<div class="slider__product">
						<div class="swiper-container imgProduct">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<?php echo wp_get_attachment_image($product_image_id, 'woocommerce_single') ?>
								</div>
								<?php if ($product_gallery_ids) : ?>
									<?php foreach ($product_gallery_ids as $product_gallery_id) : ?>
										<div class="swiper-slide">
											<?php echo wp_get_attachment_image($product_gallery_id, 'woocommerce_single') ?>
										</div>
									<?php endforeach; ?>
								<?php endif; ?>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>


						<?php
						// Если в галерее нет изображений, то не выводим
						if ($product_gallery_ids != array()) : ?>
							<div thumbsSlider="" class="swiper-container thumbProduct">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<?php echo wp_get_attachment_image($product_image_id, 'woocommerce_single') ?>
									</div>
									<?php if ($product_gallery_ids) : ?>

										<?php foreach ($product_gallery_ids as $product_gallery_id) : ?>

											<div class="swiper-slide">
												<?php echo wp_get_attachment_image($product_gallery_id, 'woocommerce_single') ?>
											</div>

											<?php echo var_dump(wp_get_attachment_image($product_gallery_ids));  ?>

										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>


					</div>

					<div class="sell__product">


						<p class="short-description"><?php echo $product->get_short_description() ?></p>

						<?php /*			
						<p class="article sku_wrapper">Артикул:
                            <span><?php echo ($sku = $product->get_sku()) ? $sku : 'N/A'; ?></span>
						</p> 
						
                        
						<div class="category">
                            <p>Категории:</p>
                            <?php echo wc_get_product_category_list($product->get_id()); ?>
                        </div>
						*/ ?>

						<div class="price__wrap">

							<div class="add-cart">
								<?php if ($product->get_price_html()) : ?>

									<form class="cart" action="<?php echo esc_url($product->add_to_cart_url()); ?>" method="post" enctype="multipart/form-data">

										<?php woocommerce_quantity_input(); ?>

										<button class="add_to_cart_btn btn-AddToCart" data-id="<?php the_ID(); ?>" type="submit">Купить</button>
									</form>

								<?php endif; ?>
							</div>

							<div class="price"><?php echo $product->get_price_html() ?></div>

							<div class="notise">
								<?php do_action('woocommerce_before_single_product'); ?>
							</div>

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

			<div class="item__btn label" data-target="#content-2">
				<p>Проект по внедрению</p>
			</div>

			<div class="item__btn label" data-target="#content-3">
				<p>Вас могут заинтересовать</p>
			</div>
		</div>

		<div class="product__wrap">
			<div class="info__product">

				<div class="accordeon">
					<?php if ($product->get_description()) : ?>
						<div class="block-list description tab active" id="content-1">
							<div class="item description"><?php echo $product->get_description() ?></div>
						</div>
					<?php endif; ?>

					<div class="block-list interface tab" data-target="two" id="content-2">
						<div class="item description">
							<?php the_field('proekt_po_vnedreniyu'); ?>
						</div>
					</div>

					<div class="block-list interes tab" data-target="three" id="content-3">
						<div class="item description">
							<?php the_field('vas_mogut_zainteresovat'); ?>
						</div>
					</div>

				</div>

			</div>

			<div class="sidebar">
				<div class="order__block">
					<p class="title"><?php the_title() ?></p>
					<p class="price">Стоимость: <?php echo $product->get_price_html() ?></p>
					<p class="action">При покупке бесплатно</p>
					<ul class="red-list">
						<li>Установка и настройка</li>
						<li>Обучение пользованию</li>
						<li>Сопровождение первые 3 мес</li>
					</ul>
					<a href="#" class="call-back">Оставить заявку</a>
				</div>
			</div>
		</div>

	</div>

</article>

<?php do_action('woocommerce_after_single_product'); ?>