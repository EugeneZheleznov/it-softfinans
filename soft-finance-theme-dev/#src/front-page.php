<?php
/*
	Template Name: Главная страница
*/
get_header(); ?>

	<main class="main">
		<article>

			<aside class="top">
				<div class="aside__wrap">

					<div class="aside__text">

						<h1>Решаем задачи автоматизации бизнес-процессов качественно и в срок</h1>

						<div class="service__list">

							<div class="service__item">
								<a href="/vnedrenie-crm/">
									<img src="<?php echo get_template_directory_uri() ?>/img/CRM-svg.png" alt="">
									<p>Внедрение CRM</p>
								</a>
							</div> 

							<div class="service__item">
								<a href="/razrabotka-po/">
									<img src="<?php echo get_template_directory_uri() ?>/img/PO-svg.png" alt="">
									<p>Разработка ПО</p>
								</a>
							</div>

							<div class="service__item">
								<a href="/mule-esb/">
									<img src="<?php echo get_template_directory_uri() ?>/img/mule-svg.png" alt="">
									<p>Mule ESB</p>
								</a>
							</div>

							<div class="service__item">
								<a href="/avtomatizirovannaya-sistema-ucheta/">
									<img src="<?php echo get_template_directory_uri() ?>/img/ASU-svg.png" alt="">
									<p>Автоматизированная<br/>система учета</p>
								</a>
							</div>

						</div>

					</div>

					<div class="aside__form">
  
						<?php echo do_shortcode('[contact-form-7 id="114" title="Оставьте заявку - Главная слайдер" html_class="form__white"]'); ?>
					</div>

				</div>
			</aside>

			<section class="service">
				<div class="service__wrap">

					<h2>Услуги</h2>

					<div class="service__list">

						<div class="service__item">
							<a href="/vnedrenie-crm/">
								<span>Внедрение CRM-систем</span>
							</a>
						</div>

						<div class="service__item">
							<a href="#">
								<span>Система искусственного интеллекта для обработки входящих заказов по e-mail</span>
							</a>
						</div>

						<div class="service__item">
							<a href="/mule-esb/">
								<span>Интеграции различных программных продуктов с использованием шины данных - Mule ESB</span>
							</a>
						</div>

						<div class="service__item">
							<a href="/avtomatizirovannaya-sistema-ucheta/">
							<span>Создание автоматизированной системы учета индивидуально для каждого предприятия</span>
							</a>
						</div>

					</div>

				</div> 
			</section>

			<section class="projects">
				<div class="projects__wrap">

					<h2>НАШИ РАЗРАБОТКИ</h2>

					<div class="projects_tabs tabs">

						<div class="block__select">

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

			<section class="aboutus">
				<div class="aboutus__wrap">
					<h2>О нас</h2>

					<div class="block__wrap">

						<div class="block__text">
							<p>«Софт Финанс» - российская компания, ведущая  разработку программного обеспечения под заказ, внедрение CRM-систем и интеграцию различных учетных систем  предприятия. Наша компания предлагает комплексные услуги в области автоматизации системы учета предприятий.</p>
							<p>Наш опыт более 17 лет:</p>
							<ul class="black-list">
								<li>Разработки полезных программ для бизнеса;</li>
								<li>Интеграции различных программных продуктов с использованием шины данных - Mule ESB (соединять несколько приложений вместе, обмениваясь данными различных программных продуктов);</li>
								<li>Внедрения решений CRM-систем на базе 1С, Клиент-Коммуникатор и других ведущих вендоров; </li>
								<li>Интеграции с существующими системами учета на предприятии;</li>
								<li>Создания автоматизированной системы учета индивидуально для каждого предприятия;</li>
							</ul>
						</div>
	
						<div class="block__img">
							<img src="<?php echo get_template_directory_uri() ?>/img/o-nas_2.jpg" alt="">
						</div>

					</div>

				</div>
			</section>

			<section class="actual"> 
				<div class="actual__wrap">

					<h2>Актуальное</h2>

					<div class="card__list">
 
						<?php		
							global $post;

							$query = new WP_Query( [
								'post_type' => 'post',
								'posts_per_page' => 3, 
							] );

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
							?>
						<?php get_template_part('/template-parts/blocks/news', 'item'); ?>
						 
						<?php 
								}
							}
							wp_reset_postdata();
						?>
					</div>

					<!-- <a href="#" class="view__all">Посмотреть все</a> -->

				</div>

			</section>
  
			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>

		</article>
	</main>

	<?php get_footer(); ?>