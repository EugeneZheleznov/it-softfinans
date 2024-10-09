<?php
/*
	Template Name: О нас 
*/
get_header('inside-page'); ?>

	<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">
					<div class="inner-page__img aboutus">  
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
						<h1>Компания</h1>

						<div class="about-company__text">
							<p>«Софт Финанс» - российская компания, ведущая  разработку программного обеспечения под заказ, внедрение CRM-систем и интеграцию различных учетных систем  предприятия. Наша компания предлагает комплексные услуги в области автоматизации системы учета предприятий.</p>

							<p>С 2004 года мы сотрудничаем с компаниями разного масштаба и сфер деятельности. Многолетнее сотрудничество с компаниями обогатило наш опыт инновационными технологиями и помогло нам выработать уникальный подход к автоматизации бизнес-процессов.</p>
						</div>


						<div class="service__list">
							<div class="service__item">
								<div class="img">
									<img src="<?php echo get_template_directory_uri() ?>/img/ESB.png" alt="">
								</div>
								<p>Интеграции различных программных продуктов с использованием шины данных - Mule ESB (соединять несколько приложений вместе, обмениваясь данными различных программных продуктов);</p>
							</div>

							<div class="service__item">
								<div class="img">
									<img src="<?php echo get_template_directory_uri() ?>/img/CRM.png" alt="">
								</div>
								<p>Внедрения решений CRM-систем на базе 1С, Клиент-Коммуникатор и других ведущих вендоров, интеграции с существующими системами учета на предприятии;</p>
							</div>

							<div class="service__item">
								<div class="img">
									<img src="<?php echo get_template_directory_uri() ?>/img/razrPO.png" alt="">
								</div>
								<p>Разработки полезных ﻿программ для бизнеса;</p>
							</div>

							<div class="service__item">
								<div class="img">
									<img src="<?php echo get_template_directory_uri() ?>/img/ASU.png" alt="">
								</div>
								<p>Создания автоматизированной системы учета индивидуально для каждого предприятия.</p>
							</div>
						</div>

					</div>
					
				</div>
			</section>

			<section class="company-tabs">
				<div class="company-tabs__wrap">
					<h2>Компания «Софт Финанс» разрабатывает и внедряет программное обеспечение по многим направлениям:</h2>

					<div class="tabs">

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

						<div class="block__content">

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

				<div class="block__wrap">
					<div class="block__text">
						<h3>Команда «Софт Финанс» – главный<br/>предмет нашей гордости.</h3>
						<p>Профессионалы, имеющий большой опыт проектирования, разработки и внедрения систем автоматизации бизнес-процессов, способные решить любую задачу компании в любой точке мира. Глубокий анализ бизнес-процессов компании и работа на результат – блестящие качества, которыми обладают участники нашей команды.</p>
						<p>Каждый день мы помогаем нашим партнерам стать более успешными, ведь мы внедряем автоматизированную систему учета по индивидуальным требованиям, настраиваем бизнес-процессы, тем самым облегчаем работу компаний и обеспечиваем бизнесу рост и процветание.</p> 
					</div>
	
					<div class="block__img">
						<img src="<?php echo get_template_directory_uri() ?>/img/about.png" alt="">
					</div>
				</div> 

			</section>

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>
			
		</article>
	</main>

<?php get_footer(); ?>