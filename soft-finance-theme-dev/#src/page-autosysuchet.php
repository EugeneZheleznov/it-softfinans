<?php
/*
	Template Name: Автоматизированная система учета
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

						<h1>Автоматизированная система учета</h1>

						<div class="service-page__text">
							<p><strong>Автоматизация системы учета на предприятии</strong> - внедрение программ, обеспечивающих ведение управленческого учета, финансово-хозяйственной деятельности. Внедрение автоматизированной системы учета позволяет руководителю организации оперативно получать информацию по бизнес-процессам, наладить работу между отделами, оптимизировать ручной труд, сократить человеческий фактор.</p> 
						</div>
 
						<div class="service-text__wrap asu">

							<div class="left-text">

								<div class="text__list asu">
									<div class="text__item">
										<p>Получение детальной статистики и ее аналитика. Формирование отчетности. Объективная оценка текущего положения компании. Планирование деятельности предприятия, принятие оперативного решения.</p>
									</div>
									<div class="text__item">
										<p>Оптимизировать рабочие процессы. Наладить связь внутри компании.</p>
									</div>
									<div class="text__item">
										<p>Контроль финансовых потоков. Оптимизация расходов.</p>
									</div> 
								</div>

							</div>

							<div class="right-text">
								<div class="text">
									<p><strong>Ключевые задачи<br/>автоматизации.</strong></p>
								</div>
							</div>

						</div>

					</div>
				</div>

			</section>


            <section class="capabilities">
				<div class="capabilities__wrap">

					<div class="capabilities__img dev-po">
						<img src="<?php echo get_template_directory_uri() ?>/img/razrabotka-po-line.png" alt="">
						<h2>Профессиональная автоматизация системы учета включает в себя несколько этапов:</h2>
					</div>
					 
					<div class="capabilities__list dev-po">

						<div class="capabilities__item"> 
							<p><strong>Аудит </strong>текущих бизнес-процессов компании. Сбор необходимой информации и ее анализ.</p>  
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

						<div class="capabilities__item"> 
							<p><strong>Четкое формулирование задач</strong> автоматизации системы учета.</p> 
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

						<div class="capabilities__item"> 
							<p>Подбор подходящей программы, <strong>составление плана</strong> автоматизации.</p> 
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

                        <div class="capabilities__item"> 
							<p>Обучение ключевых пользователей. Дальнейшее сопровождение.<strong>Оценка эффективности внедрения автоматизированной системы учета.</strong> </p> 
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

                        <div class="capabilities__item"> 
							<p>Установка и доработка программного обеспечения, отладка его работы, тестирование. </p>  
						</div>
 
					</div>

				</div>
			</section>

			<section class="asu">
				<div class="text-wrap">
					<div class="text">
						<h4>Внедрение автоматизированной системы учета на предприятии позволяет</h4>
						<ul class="red-list">
							<li>Запустить бизнес-процессы компании более прозрачно. Руководство компании будет видеть на что идут затраты, принять решение по их сокращению, спрогнозировать расходы.</li>
							<li>Оценить прибыльность и рентабельность определенных бизнес-процессов.</li>
							<li>Объединить данные разных отделов в одной системе. Наладить коммуникацию в компании как с сотрудниками, так и с клиентами.</li>
							<li>Сократить время на обработку данных и влияние человеческого фактора (минимизировать ошибки).</li>
							<li>Принимать правильные управленческие решения (руководитель будет видеть всю информацию по расходам денежных средств, их поступлению и целям, сможет принять правильное решение).</li>
							<li>Оптимизировать процесс прогнозирования.</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="inner-page__bottom-block"> 

				<div class="block__wrap asu">

					<div class="block__img">
						<?php echo do_shortcode('[contact-form-7 id="114" title="Оставьте заявку - Главная слайдер" html_class="form__white"]'); ?>
					</div>

					<div class="block__text">
						<h4>Мы способствуем увеличению доходов наших клиентов путем внедрения автоматизированной системы учета следующих программ:</h4> 
						<div class="wrap__img">
							<div class="item">
								<img src="<?php echo get_template_directory_uri() ?>/img/1c.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri() ?>/img/btrx24.png" alt="">
							</div>
							<div class="item">
								<img src="<?php echo get_template_directory_uri() ?>/img/clicksys.png" alt="">
							</div>
						</div>
					</div>
	

				</div> 

			</section>

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>		
									
		</article>
	</main>

<?php get_footer(); ?>