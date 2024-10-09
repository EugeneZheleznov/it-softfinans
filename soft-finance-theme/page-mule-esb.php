<?php
/*
	Template Name: Mule ESB
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
							<p><strong>Mule ESB (enterprise service bus)</strong> - новый подход к автоматизации бизнес-процессов. Интеграционное программное обеспечение Mule ESB позволяет настроить <strong>обмен данными между разными программами и приложениями.</strong> Также данный метод может называться интеграционной шиной данных.</p>

							<p><strong>Mule ESB / шина данных</strong> актуальна для предприятий, которые используют информационные системы разных вендоров, и они не взаимодействуют между собой. Часто бывает так, что очень сложно настроить связь между этими системами. В таких случаях для их взаимодействия используют подход интегрированной шины данных ESB без необходимости дополнительной доработки в ПО. <strong>Данный подход обеспечивает:</strong></p>

							<ul class="red-list">
								<li>интеграцию между информационными системам предприятия, настраивает быструю связь между ними;</li>
								<li>снижение затрат на администрирование систем.</li>
							</ul>
						</div>
 

					</div>
				</div>

			</section>

			<section class="capabilities">
				<div class="capabilities__wrap">

					<div class="capabilities__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/numbers-bg.png" alt="">
						<h2>Ключевые возможности Mule ESB</h2>
					</div>
					 
					<div class="capabilities__list">
						<div class="capabilities__item">
							<img src="<?php echo get_template_directory_uri() ?>/img/arrow.png" alt="">
							<p><strong>Маршрутизация и преобразование сообщений. </strong></p> 
							<p>Mule ESB в соответствии с настройками получает данные из одной системы и направляет их в другую, преобразуя данные из неподходящего формата в подходящий для определенной системы.</p>
						</div>
						<div class="capabilities__item">
							<img src="<?php echo get_template_directory_uri() ?>/img/arrow.png" alt="">
							<p><strong>Масштабируемость.</strong></p>
							<p>Mule ESB может работать с различным количеством информационных систем и различными объемами данных, распределяя нагрузку между ними.</p>
						</div>
						<div class="capabilities__item">
							<img src="<?php echo get_template_directory_uri() ?>/img/arrow.png" alt="">
							<p><strong>Управление системами и приложениями.</strong></p>
							<p>Сервисная шина Mule ESB предоставляет возможность отслеживать статусы событий и получать сообщения при возникновении проблем.</p>
						</div>
					</div>

				</div>
			</section>

			<section class="advantages mule-esb">
				<div class="advantages__wrap">

					<h2>Преимущества Mule ESB</h2>

					<div class="advantages__list">
						<ul class="red-list">
							<li>Гарантированная доставка информационных сообщений.</li>
							<li>Организация безопасного канала передачи.</li>
							<li>Единое информационное поле.</li>
							<li>Возможность мониторинга и диагностики состояния передачи.</li>
						</ul>
					</div>
 
				</div>
			</section>

			<section class="inner-page__bottom-block"> 

				<div class="block__wrap mule-esb">

					<div class="block__img">
						<?php echo do_shortcode('[contact-form-7 id="114" title="Оставьте заявку - Главная слайдер" html_class="form__white"]'); ?>
					</div>

					<div class="block__text">
						<h3>Наш опыт по внедрению Mule ESB</h3>
						<p>Наши специалисты осуществляют разработку решений и внедрение интеграционной шины данных Mule ESB. </p>
						<p>Благодаря этому у клиента появилась возможность реализовывать обмен данными между имеющимися системами с минимальными затратами на разработку.</p> 
						<p>Внедрение интеграционной шины данных позволит сократить затраты на разработку и поддержку IT-системы и, как следствие, работать эффективнее. В дальнейшем при интеграции с новой системой уже не придется делать сотни доработок, достаточно интегрировать ее с ESB и настроить маршруты данных внутри сервисной шины предприятия.</p>
					</div>
	

				</div> 

			</section>

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>
			
		</article>
	</main>

<?php get_footer(); ?>