<?php
/*
	Template Name: Разработка ПО
*/
get_header('inside-page'); ?>

<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">
					<div class="inner-page__img dev-po"> 
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
						<h1>Разработка программного обеспечения</h1>

						<div class="about-company__text">
							<p>«Софт Финанс» предлагает клиентам <strong>разработку программного обеспечения по требованиям заказчика с нуля</strong>. С 2004 года мы разрабатываем решения для автоматизации бизнес процессов наших клиентов.</p>

							<p><strong>Функциональность продукта учитывает специфику работы заказчика.<br/>Программа интегрируется с существующими системами в компании заказчика.</strong></p>
						</div>


						<div class="service__list dev-po">

							<div class="service__item">
								<div class="img">
									<img src="<?php echo get_template_directory_uri() ?>/img/shesternya.png" alt="">
								</div>
                                <p class="title"><strong>Большой опыт.</strong></p>
								<p>Мы специализируемся на разработке ПО с 2004 года.</p>
							</div>

							<div class="service__item">
								<div class="img">
									<img src="<?php echo get_template_directory_uri() ?>/img/kartochka.png" alt="">
								</div>
                                <p class="title"><strong>Высокие навыки наших разработчиков.</strong></p>
								<p>Специалисты имеют большой опыт в разработке программного обеспечения, разных направлений и масштабов.</p>
							</div>

							<div class="service__item">
								<div class="img">
									<img src="<?php echo get_template_directory_uri() ?>/img/idea.png" alt="">
								</div>
                                <p class="title"><strong>Успешно реализованные проекты в разных сферах.</strong></p> 
							</div>
 
						</div>

					</div>
					
				</div>
			</section>


            <section class="capabilities">
				<div class="capabilities__wrap">

					<div class="capabilities__img dev-po">
						<img src="<?php echo get_template_directory_uri() ?>/img/razrabotka-po-line.png" alt="">
						<h2>Разработка программного обеспечения</h2>
					</div>
					 
					<div class="capabilities__list dev-po">

						<div class="capabilities__item"> 
							<p><strong>Активное </strong>взаимодействие с заказчиком и пользователями продукта.</p>  
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

						<div class="capabilities__item"> 
							<p><strong>Глубокий анализ</strong> бизнес-процессов компании и установленных программ.</p> 
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

						<div class="capabilities__item"> 
							<p><strong>Предложение решения,</strong> выстраивание приоритетов развития проекта.</p> 
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

                        <div class="capabilities__item"> 
							<p><strong>Обучение</strong> пользованию ключевых сотрудников. Дальнейшее <strong>сопровождение и консультирование.</strong></p> 
                            <img src="<?php echo get_template_directory_uri() ?>/img/arrow2.png" alt="">
						</div>

                        <div class="capabilities__item"> 
							<p><strong>Разработка</strong> программного обеспечения под заказ, <strong>демонстрация, внедрение.</strong></p>  
						</div>
 
					</div>

				</div>
			</section>


			<section class="company-tabs dev-po">
				<div class="company-tabs__wrap">
					<h2>Компания «Софт Финанс» разрабатывает и внедряет программное обеспечение по многим направлениям:</h2>

					<div class="tabs dev-po">

						<div class="block__select five">

							<div>
								<div class="label">
									<label for="tab-btn-1" data-target="#content-1">Программа учёта и контроля печати на принтерах</label>
								</div>
								<div class="input">
									<input type="radio" class="tabRadioBtn" name="tab-btn" id="tab-btn-1"  data-target="#content-1" value="" checked>
								</div>
							</div>

							<div>
								<div class="label">
									<label for="tab-btn-2" data-target="#content-2">Система искусственного интеллекта для обработки входящих заказов по e-mail</label>
								</div>
								<div class="input">
									<input type="radio" class="tabRadioBtn" name="tab-btn" id="tab-btn-2" data-target="#content-2" value="">
								</div>
							</div>

							<div>
								<div class="label">
									<label for="tab-btn-3" data-target="#content-3">Программа автоматического сбора ценовых предложений с сайтов поставщиков</label>
								</div>
								<div class="input">
									<input type="radio" class="tabRadioBtn" name="tab-btn" id="tab-btn-3" data-target="#content-3" value=""> 
								</div>
							</div>

							<div>
								<div class="label">
									<label for="tab-btn-4" data-target="#content-4">Cистема простого ведения архива документов Архивариус</label>
								</div>
								<div class="input">
									<input type="radio" class="tabRadioBtn" name="tab-btn" id="tab-btn-4" data-target="#content-4" value=""> 
								</div>
							</div>

							<div>
								<div class="label">
									<label for="tab-btn-5" data-target="#content-5">Cистема автоматизированной печати бланков строгой отчётности БСО-сервис</label>
								</div>
								<div class="input">
									<input type="radio" class="tabRadioBtn" name="tab-btn" id="tab-btn-5" data-target="#content-5" value=""> 
								</div>
							</div>

						</div>

						<div class="block__content dev-po">

							<div class="tab active" id="content-1">
								<p>«СФ: Контроль принтера» - программное решение, разработанное для учета процесса печати и сканирования на принтере.</p>
								<p>Решение позволяет:</p>
								<ul class="black__list">
									<li>вести статистику печати и сканирования,</li>
									<li>отследить объемы печати конкретным сотрудником,</li>
									<li>выявить «ненужную» печать,</li>
									<li>скорректировать список документов для печати.</li>
								</ul>
							</div>

							<div class="tab" id="content-2" data-target="two">
								<p>«СФ: Обработка e-mail заказов» - новое интеллектуальное решение для обработки входящих заказов по e-mail.</p>
								<ul class="black__list">
									<li>Оптимизирует бизнес-процесс по приему писем с заказами.</li>
									<li>Не позволит пропустить ни одной заявки по e-mail от клиента.</li>
									<li>Решение можно внедрить в любой организации в короткие сроки.</li>
								</ul>
							</div>

							<div class="tab" id="content-3" data-target="three"> 
								<ul class="black__list">
								<li>Позволяет автоматически провести анализ цен всех поставщиков определенного товара. </li>
									<li>Выбрать наиболее привлекательное предложение.</li>
									<li>Сокращает время на обработку заказа.</li>
								</ul>
							</div>

							<div class="tab" id="content-4" data-target="four"> 
								<p>Программа предназначена для создания электронного хранилища документов как организаций, так и домашних пользователей.</p>
								<p>Архивариус облегчает процесс сканирования документов с автоматическим сохранением электронных копий в базе данных, присвоением документам атрибутов. Осуществляет поиск документов по различным параметрам.</p>
							</div>

							<div class="tab" id="content-5" data-target="five"> 
								<p>Главной целью БСО-сервиса является возможность организациям самостоятельно создавать бланки строгой отчетности, когда это необходимо, в нужном количестве и формате. Система БСО-сервис полностью соответствует предъявляемым законодательством требованиям.</p>
							</div>

						</div>

					</div>

				</div>
			</section>

			<section class="inner-page__bottom-block"> 

				<div class="block__wrap dev-po">

					<div class="block__img">
						<?php echo do_shortcode('[contact-form-7 id="114" title="Оставьте заявку - Главная слайдер" html_class="form__white"]'); ?>
					</div>

					<div class="block__text">
						<h2>Мы разработаем для вас:</h2>
						<ul class="white-list">
							<li><h3>Программное обеспечение под ключ.</h3>
                                <p>Заказчик получает систему, созданную специально под нужды предприятия, учитывающую специфику организации.</p>
                                <p>Анализируем специфику предприятия заказчика, разрабатываем систему удобную для пользователей и прозрачную для руководителей.</p>
                                <p>Программное обеспечение на заказ интегрировано с уже имеющейся на предприятии учетной системой.</p>

                            </li>
							<li><h3>Мобильное приложение - для Android или IOS.</h3>
                                <p>Приложения для клиентов с интеграцией установленной на предприятии системой. Повышение лояльности, получение обратной связи.</p>
                                <p>Приложение для бизнеса с интеграцией установленной системой. Автоматизация работы сотрудников.</p>
                            </li> 
						</ul>
					</div>
	

				</div> 

			</section>

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>		
									
		</article>
	</main>

<?php get_footer(); ?>