<?php
/*
	Template Name: Автоматизация
*/
get_header('inside-page'); ?>

<main class="main">
		<article>

			<aside class="automatization-page">
                <div class="breadcrumb">
                    <?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
					?>
                </div>

                <div class="block__text">
                <img src="<?php echo get_template_directory_uri() ?>/img/clicksys.png" alt="">
                    <h1>Ваше уникальное решение для автоматизации бизнес-процессов</h1> 
                    <a class="red__btn popup__open " href="#">Получить предложение</a>
                </div>
                <div class="block__img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/autom-biznes-proc/fghdgh.png" alt="">
                </div>

                <div class="wrap__plusi">
                    <div class="plus">
                        <p class="title">Гибкость и масштабируемость системы</p>
                        <p>Позволяет произвести анстройки под любые требования</p>
                    </div>
                    <div class="plus">
                        <p class="title">Быстрая интеграция с другими системами</p>
                        <p>с 1С, телефонией, сайтом, каналами получения лидов и другими системами</p>
                    </div>
                    <div class="plus">
                        <p class="title">Построение отчетов на базе MS SQL Server Reporting Services</p>
                        <p>Любые формы отчетов и дашборды</p>
                    </div>
                </div>
			</aside>

            <section class="system__pravila">
                <div class="wrap">
                    <h2>«Система по вашим правилам</h2>

                    <div class="block__text">
                        <p>Клиент-Коммуникатор» (КлиК) - это уникальная платформа, созданная для автоматизации индивидуальных систем ведения учета и управления бизнес-процессами.</p>
                        <p><strong>Только необходимы вам отчеты, настройки. Всё самое нужное и без лишних затрат.</strong></p>
                    </div>


                    <img src="<?php echo get_template_directory_uri() ?>/img/soft.png" alt="">

                    <a class="btn__demonstration popup__open" href="#">Демонстрация</a>
                </div>
            </section>

            <section class="individual">
                <div class="wrap">
                    <h2>Создадим вашу индивидуальную систему автоматизации бизнес-процессов</h2>

                    <div class="block__text">
                        <p>Платформа «КлиК» позволяет быстро решать рутинные и сложные задачи автоматизации бизнес-процессов компании разных сфер деятельности и разных масштабов. А гибкость и масштабируемость платформы обеспечивают быструю интеграцию с любыми IT-системами, сервисами и телефонией. На базе платформы «Клиент-коммуникатор» можно создать свое уникальное решение, которые будет отвечать всем требованиям конкретного предприятия.</p>
                    </div>
                    <div class="block__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/autom-biznes-proc/remote_banking_services.png" alt="">
                    </div>
                </div>
            </section>

            <section class="steps">
                <div class="wrap">
                    <h2>Автоматизировать бизнес непросто, но с платформой КлиК вы сможете больше.<br>Платформа подходит, если:</h2>

                    <div class="steps__list">
                        <div class="step__item">
                            <p>Необходимо настроить нестандартные отчеты.</p>
                        </div>
                        <div class="step__item">
                            <p>Вы уже попробовали и вам не подошли версии других программ.</p>
                        </div>
                        <div class="step__item">
                            <p>Необходимо настроить 1-2 отчета и вы не готовы переплачивать за другие ненужные отчеты, которые есть в других программах.</p>
                        </div>
                        <div class="step__item">
                            <p>Вы хотите управлять бизнесом в одной системе.</p>
                        </div>
                    </div>

                    <a href="#" class="btn__predlozhenie popup__open">Получить предложение</a>
                </div>
            </section>

            <section class="why">
                <div class="wrap">
                    <h2>Почему мы рекомендуем автоматизацию<br>бизнес-процессов на платформе КлиК</h2>

                    <div class="proc__list">
                        <div class="proc__item">
                            <p class="title">Максимальная гибкость</p>
                            <p>Позволяет создать уникальное решение под потребности конкретного предприятия.</p>
                        </div>
                        <div class="proc__item">
                            <p class="title">Стоимость проекта</p>
                            <p>Стоимость проекта вас приятно удивит. Конкуренты не могут похвастаться такой лояльной ценовой политикой.</p>
                        </div>
                        <div class="proc__item">
                            <p class="title">Стоимость дальнейшей поддержки</p>
                            <p>Нет необходимости в приобретении платных обновлений, как систем других вендеров.</p>
                        </div>
                        <div class="proc__item">
                            <p class="title">Безопасность</p>
                            <p>Настраиваемые права доступа. Возможность запрета экспорта данных. Быстрая смена ответственного при необходимости.</p>
                        </div>
                        <div class="proc__item">
                            <p class="title">Возможность выбора</p>
                            <p>Условий работы с программой: в офисе или удаленно.</p>
                        </div>
                        <div class="proc__item">
                            <p class="title">Возможность выбора</p>
                            <p>Работать на ОС Windows, в web и на мобильных устройствах.</p>
                        </div>
                    </div>

                    <div class="proc__long">
                        <p class="title">Построение отчётов на базе MS SQL Server Reporting Services</p>
                        <p>Настроим отчеты с использованием данных, таблиц, графиков, диаграмм и изображений. Вы можете легко развертывать отчеты на локальном или удаленном сервере.</p>
                    </div>

                    <p class="action">Как установить Microsoft SQL Server Reporting Services по минимальной стоимости? <a class="popup__open" href="#">Оставьте заявку</a></p>
                </div>
            </section>

            <section class="integration">
                <div class="wrap">
                    <h2>Интеграции*</h2>

                    <div class="soft__list">
                        <div class="soft__item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/bitrix.png" alt="">
                        </div>
                        <div class="soft__item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/moisklad.png" alt="">
                        </div>
                        <div class="soft__item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/1c.png" alt="">
                        </div>
                        <div class="soft__item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/whatsup.png" alt="">
                        </div>
                        <div class="soft__item">
                            <img src="<?php echo get_template_directory_uri() ?>/img/tg.png" alt="">
                        </div>
                    </div>

                    <p class="desc"><strong>*Интеграция возможна с любыми</strong> программами и приложениями, используя интеграционное программное обеспечение <span>Mule ESB / ИНТЕГРАЦИОННАЯ ШИНА ДАННЫХ</span></p>

                    <h2>Остались сомнения, подойдет ли вам для автоматизации платформа КлиК?</h2>

                    <p class="action"><strong>Закажите обратный звонок</strong> и мы ответим на любые вопросы, предложим решение, предоставим бесплатный доступ к демострации.</p>

                    <?php echo do_shortcode('[contact-form-7 id="114" title="Оставьте заявку - Главная слайдер" html_class="form__white"]'); ?>
                </div>
            </section>
  

			<?php get_template_part('template-parts/blocks/help', 'expert'); ?>					
			
		</article>
	</main>

<?php get_footer(); ?>