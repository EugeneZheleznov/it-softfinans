<?php
/*
	Template Name: IT аутсорсинг
*/
get_header('inside-page'); ?>

	<main class="main">
		<article>

			<aside class="inner-page">
				<div class="inner-page__wrap">
					<div class="inner-page__img it-autsorsing"> 
					</div>  
				</div>
			</aside>

			<section class="inner-page">
				<div class="inner-page__wrap">

					<div class="inner-page autsorsing">

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

						<div class="autsorcing__text">

                            <div class="wrap__cards">
                                <div class="card">
                                    <div class="top">
                                        <div class="images">
                                            <img src="/wp-content/uploads/2023/09/audit.png" alt="">
                                        </div>
                                        <div class="text">
                                            <strong>ИТ-аудит</strong>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <p><strong>Проведение ИТ-аудита</strong> компании даст возможность в полной мере оценить текущее состояние программно-аппаратного комплекса, выявить в нем узкие места, определить его соответствие бизнес-процессам, а также</p>
                                    </div>
                                    <a href="#">Подробнее</a>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="images">
                                            <img src="/wp-content/uploads/2023/09/import.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p><strong>Импортозамещение</strong></p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <p>Наши профессионалы помогут вам на всех этапах создания импортонезависимого ПО, от аудита текущих ИТ-систем и построения стратегии импортозамещения до разработки, внедрения и поддержки индивидуальных</p>
                                    </div>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>


                            <div class="wrap__cards">
                                <div class="card">
                                    <div class="top">
                                        <div class="images">
                                            <img src="/wp-content/uploads/2023/09/po.png" alt="">
                                        </div>
                                        <div class="text">
                                            Подбор ПО и доработка под требования заказчика
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <p>Подбор программы, создание уникальной системы, решающей поставленные задачи и полностью отвечающее требованиям заказчика и современного законодательства.</p>
                                    </div>
                                    <a href="#">Подробнее</a>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="images">
                                            <img src="/wp-content/uploads/2023/09/server.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p><strong>Сопровождение серверов</strong></p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <p>Настройка и администрирование серверов и сетевого оборудования. Файловый серверы. Почта. Сервера баз данных.</p>
                                    </div>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>


                            <div class="wrap__cards">
                                <div class="card">
                                    <div class="top">
                                        <div class="images">
                                            <img src="/wp-content/uploads/2023/09/infrastructura.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p><strong>Обслуживание IT -инфраструктуры</strong></p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <p>Настройка, модернизация <strong>IT-инфраструктуры</strong>. Разработка стратегии автоматизации бизнес процессов. Обслуживание любой офисной техники. Внедрение новых сервисов.</p>
                                    </div>
                                    <a href="#">Подробнее</a>
                                </div>
                                <div class="card">
                                    <div class="top">
                                        <div class="images">
                                            <img src="/wp-content/uploads/2023/09/pk.png" alt="">
                                        </div>
                                        <div class="text">
                                            <p><strong>Комплексное обслуживание компьютеров и программ</strong></p>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <p>Установка и настройка программ. Модернизация и замена ПК. Удаление вирусов. Восстановление данных. Улучшение работоспособности</p>
                                    </div>
                                    <a href="#">Подробнее</a>
                                </div>
                            </div>
 
						</div>
  
					</div>
				</div>

			</section>

			<section class="capabilities">
				<div class="capabilities__wrap">

					<div class="capabilities__bg">
						 
						<h2>Вам не нужно искать поставщика другого программного обеспечения!</h2>

                        <p>Наша команда работает на рынке IT - услуг с 2004 года. За это время работы мы познали все тонкости реализации ИТ-проектов: как бесшовно интегрироваться в команды клиентов, эффективно организовывать работу всей команды и обеспечивать качественный результат. </p>

                        <p>Лицензионное программное обеспечение  для автоматизации бизнес-процессов и оборудование можно купить у нас.</p>    


                        <div class="list__plus">
                            <div class="item">
                                <div class="images">
                                    <img src="/wp-content/uploads/2023/09/udobno.png" alt="">
                                </div>
                                <p>Удобно</p>
                            </div>

                            <div class="item">
                                <div class="images">
                                    <img src="/wp-content/uploads/2023/09/bistro.png" alt="">
                                </div> 
                                <p>Быстро</p>
                            </div>

                            <div class="item">
                                <div class="images"> 
                                    <img src="/wp-content/uploads/2023/09/prof.png" alt="">
                                </div>
                                <p>Профессионально</p>
                            </div>

                            <div class="item">
                                <div class="images">
                                    <img src="/wp-content/uploads/2023/09/nadezhno.png" alt="">
                                </div> 
                                <p>Надежно</p>
                            </div>

                        </div>    



					</div>
					   
				</div>
			</section>

 
            <section>
                <div class="text">
                    <?php the_content(); ?>
                </div>
            </section>
 

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>
			
		</article>
	</main>

<?php get_footer(); ?>