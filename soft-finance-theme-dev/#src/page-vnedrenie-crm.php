<?php
/*
	Template Name: Внедрение CRM
*/
get_header('inside-page'); ?>

<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">
					<div class="inner-page__img crm"> 
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
						<h1>Внедрение CRM</h1>

						<div class="service-page__text">
							<p><strong>СРМ система</strong> - это система управления взаимоотношения с клиентами. Система позволяет повысить уровень продаж, оптимизировать маркетинг, улучшить обслуживание клиентов, установить и улучшить бизнес-процессы.</p> 
						</div>
 
						<div class="service-text__wrap">

							<div class="left-text">

								<div class="text__list">
									<div class="text__item">
										<p>Подбор CRM с учетом специфики бизнеса</p>
									</div>
									<div class="text__item">
										<p>Внедрение и доработка CRM под нужды компании  </p>
									</div>
									<div class="text__item">
										<p>Интеграция с почтой, телефонией, сайтом и т.д.</p>
									</div>
									<div class="text__item">
										<p>Обучение сотрудников и поддержка</p>
									</div> 
								</div>

							</div>

							<div class="right-text">
								<div class="text">
									<p><strong>Внедрение CRM</strong> системы позволит связать в единое целое продажи, производство, склад и финансы. Следствием этого будет повышение контроля над бизнесом и рост его эффективности. </p>
								</div>
							</div>

						</div>

					</div>
				</div>

			</section>

			<section class="capabilities">
				<div class="capabilities__wrap">

					<div class="capabilities__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/crm-line.png" alt="">
						<p><strong>Внедрение CRM</strong> существенно облегчает жизнь как владельцам бизнеса, так и сотрудникам. Чтоб внедрение дало ожидаемый результат и приносило пользу компании необходимо тщательно подготовиться.</p>
					</div>
					 
					<div class="capabilities__list">
						<div class="capabilities__item">
							<img src="<?php echo get_template_directory_uri() ?>/img/arrow.png" alt="">
							<p><strong>Определить цели внедрения</strong></p> 
							<p>(повысить скорость обработки заказа и т.д.) <strong>и задачи</strong> ( интеграция CRM-системы с АТС или учетной системой, видеть карточку контрагента по звонку и т.д.). Цели и задачи определяются для каждого конкретного отдела системы.</p>
						</div>
						<div class="capabilities__item">
							<img src="<?php echo get_template_directory_uri() ?>/img/arrow.png" alt="">
							<p><strong>Определить бюджет.</strong></p>
							<p>Бюджет на проект сразу будет очень сложно оценить, но можно определить границы бюджета.</p>
						</div>
						<div class="capabilities__item">
							<img src="<?php echo get_template_directory_uri() ?>/img/arrow.png" alt="">
							<p><strong>Подобрать CRM систему. </strong></p>
							<p>Проанализировать бизнес-процессы компании. Определить требования к системе CRM (обязательная интеграция с уже существующей системой на предприятии, с сайтом и т.д., наличие определенных функций - ведение склада, производства и т.д.).</p>
						</div>
					</div>

				</div>
			</section>

			<section class="crm-systems">
				<div class="crm-systems__wrap">
					<h2>CRM- системы для автоматизации бизнеса.</h2>

					<div class="crm-systems__list">

						<div class="crm-systems__item data__Modal">
							<div class="crm-systems__img">
								<img src="<?php echo get_template_directory_uri() ?>/img/1c.png" alt="">
							</div> 
							<p><strong>CRM от фирмы «1С»</strong> - подойдет придприятиям малого, среднего и крупного бизнеса, независимо от вида его деятельности. Решение позволит автоматизировать процессы закупок, продаж, аркетинга и сервисного обслуживания.</p>
							<span style="display:none" class="get__mailTitle">CRM от фирмы «1С» <br>Заказать консультацию</span>
							<div onclick="getTitle(this)" class="btn__crm popup__open get__title">Заказать консультацию</div>
						</div>

						<div class="crm-systems__item data__Modal">
							<div class="crm-systems__img">
								<img src="<?php echo get_template_directory_uri() ?>/img/bitrix24.png" alt="">
							</div>
							<p><strong>CRM Битрикс24</strong> поможет выстроить полноценное взаимодействие с клиентами благодаря объединению всех каналов коммуникации (телефон, почта, чат на сайте, социальные сети) в едином интерфейсе. Площадка с дополнениями содержит более 1000 решений для кастомизации и улучшения CRM-системы. </p>
							<span style="display:none" class="get__mailTitle">CRM Битрикс24 <br>Заказать консультацию</span>
							<div onclick="getTitle(this)" class="btn__crm popup__open get__title">Заказать консультацию</div>
						</div>

						<div class="crm-systems__item data__Modal">
							<div class="crm-systems__img">
								<img src="<?php echo get_template_directory_uri() ?>/img/clicksys.png" alt="">
							</div> 
							<p>Благодаря постоянному функциональному совершенствованию <strong>CRM КлиК®</strong>, пользователи системы обеспечены интуитивно понятным и эргономичным интерфейсом, мощным аналитическим блоком и современными инструментами работы с клиентами, партнерами и коллегами.</p>
							<span style="display:none" class="get__mailTitle">CRM КлиК <br>Заказать консультацию</span>
							<div onclick="getTitle(this)" class="btn__crm popup__open get__title">Заказать консультацию</div>
						</div>

					</div>
				</div>
			</section>

			<section class="advantages crm">
				<div class="advantages__wrap">

					<h2>На что необходимо обратить внимание при выборе<br/>CRM системы помимо функциональных возможностей?</h2>

					<div class="advantages__list">
						<ul class="red-list">
							<li>Возможность интеграции с другими системами и сервисами.</li>
							<li>Есть ли возможность тонкой настройки и доработки под нужды компании.</li>
							<li>Условия техобслуживания выбранной системы CRM.</li>
							<li>Системные требования.</li>
							<li>Условия масштабирования.</li>
						</ul>
					</div>
 
				</div>
			</section>

			<section class="inner-page__bottom-block"> 

				<div class="block__wrap crm">

					<div class="block__img">
						<?php echo do_shortcode('[contact-form-7 id="114" title="Оставьте заявку - Главная слайдер" html_class="form__white"]'); ?>
					</div>

					<div class="block__text">
						<h2>Наш опыт по внедрению CRM</h2>
						<ul class="white-list">
							<li>Подбор подходящей системы CRM.</li>
							<li>Внедрение под ключ. Адаптация системы под нужды клиента.</li>
							<li>Настройки и доработки системы. Интеграция с установленными ПО, сайтом, телефонией.</li>
							<li>Обучение сотрудников работе в CRM- системе.</li> 
						</ul>
					</div>
	

				</div> 

			</section>

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>					
			
		</article>
	</main>

<?php get_footer(); ?>