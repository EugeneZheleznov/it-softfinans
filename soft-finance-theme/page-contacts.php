<?php
/*
	Template Name: Контакты
*/
get_header('inside-page'); ?>

<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">
					<div class="inner-page__img contacts"> 
					</div>  
				</div>
			</aside>

			<section class="inner-page">
				<div class="inner-page__wrap">

					<div class="inner-page contacts">

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
						<h1>Контакты</h1>

						<div class="contact__small-block">
							<h3>Свяжитесь с нами любым удобным способом</h3>
							<ul>
								<li>
									<img src="<?php echo get_template_directory_uri() ?>/img/tel.png" alt="">
									<a href="tel:<?php the_field('tel', 'options' ); ?>"><?php the_field('tel', 'options' ); ?></a>
								</li>
								<li> 
									<img src="<?php echo get_template_directory_uri() ?>/img/mail.png" alt="">
									<a href="mailto:<?php the_field('email', 'options' ); ?>" target="_blank"><?php the_field('email', 'options' ); ?></a>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri() ?>/img/wta.png" alt=""> 
									<a href="https://wa.me/<?php the_field('whatsapp', 'options' ); ?>"><?php the_field('whatsapp', 'options' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="contact__small-block data__Modal">
							<h3 class="get__title get__mailTitle">Обращение в службу поддержки</h3>
							<p>Найдем решение вашей проблемы</p>
							<div onclick="getTitle(this)"  class="popup__open btn__tp">Оставить заявку</div>
						</div>	

						<div class="contact__big-block">

							<div class="wrap">
								<h3>Реквизиты</h3>

								<div class="row">

									<div class="item">
										<p>Полное наименование организации - <?php the_field('full_name_org', 'options' ); ?></p>
									</div>

									<div class="item">
										<p><strong>Сокращенное наименование организации</strong> <?php the_field('short_name_org', 'options' ); ?></p>
									</div>

									<div class="item">
										<p><strong>Юридический / Почтовый адрес</strong><br><?php the_field('address', 'options' ); ?></p>
									</div>

								</div> 

							</div>

							<div class="wrap">

								<div class="row">
									<div class="item">
										<p>ИНН</p>
										<p><?php the_field('inn', 'options' ); ?></p>
									</div>
									<div class="item">
										<p>КПП</p>
										<p><?php the_field('kpp', 'options' ); ?></p>
									</div>
									<div class="item">
										<p>ОГРН</p>
										<p><?php the_field('ogrn', 'options' ); ?></p>
									</div>
								</div>

								<div class="row">
									<div class="item">
										<p>ОКВЭД</p>
										<p><?php the_field('okved', 'options' ); ?></p>
									</div>
									<div class="item">
										<p>ОКПО</p>
										<p><?php the_field('okpo', 'options' ); ?></p>
									</div>
									<div class="item">
										<p>ОКАТО / ОКТМО</p>
										<p><?php the_field('okato_oktmo', 'options' ); ?></p>
									</div>
								</div>

								<div class="row">
									<div class="item">
										<p>Наименование банка <?php the_field('name_bank', 'options' ); ?></p> 
									</div> 
								</div>

								<div class="row">
									<div class="item">
										<p>БИК</p>
										<p><?php the_field('bik', 'options' ); ?></p>
									</div>
									<div class="item">
										<p>Кор. счет</p>
										<p><?php the_field('kor_schet', 'options' ); ?></p>
									</div> 
								</div>

								<div class="row">
									<div class="item">
										<p>Генеральный директор <?php the_field('gen_dir', 'options' ); ?></p> 
									</div> 
								</div>


							</div>

						</div>
					</div>
					
				</div>
			</section>
 
			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>		
									
		</article>
	</main>

<?php get_footer(); ?>