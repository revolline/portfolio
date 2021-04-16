<?php

/* @var $this yii\web\View */

use app\widgets\Portfolio;

$this->title = 'Сайт-портфолио Кристины Стрельчук';
?>
    <!-- header -->
    <div id="home" class="header">
        <div class="container">
            <!-- top-hedader -->
            <div class="top-header">
                <!-- /logo -->
                <!--top-nav---->
                <div class="top-nav">
                    <div class="navigation">
                        <div class="logo">
                            <h1><a href="/"><span>N</span>ikkiwest</a></h1>
                        </div>
                        <div class="navigation-right">
                            <span class="menu"><img src="/images/menu.png" alt=" "/></span>
                            <nav class="link-effect-3" id="link-effect-3">
                                <ul class="nav1 nav nav-wil">
                                    <li class="active"><a data-hover="Главная" href="/">Главная</a></li>
                                    <li><a class="scroll" data-hover="Обо мне" href="#about">Обо мне</a></li>
                                    <li><a class="scroll" data-hover="Умения" href="#services">Умения</a></li>
                                    <li><a class="scroll" data-hover="Опыт" href="#work">Опыт</a></li>
                                    <li><a class="scroll" data-hover="Работы" href="#port">Работы</a></li>
                                    <li><a class="scroll" data-hover="Блог" href="#blogs">Блог</a></li>
                                    <li><a class="scroll" data-hover="Контакты" href="#contact">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- /top-hedader -->
                </div>
                <div class="banner-info">
                    <div class="col-md-7 col-sm-12 header-right">
                        <h1>Привет !</h1>
                        <h6>FULLSTACK PHP DEVELOPER | TeamLead</h6>
                        <ul class="address">

                            <li>
                                <ul class="address-text">
                                    <li><b>Имя</b></li>
                                    <li>Стрельчук Кристина</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>Возраст</b></li>
                                    <li>24</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>Телефон</b></li>
                                    <li>8-913-787-99-68</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>Город</b></li>
                                    <li>Новосибирск</li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>Почта</b></li>
                                    <li><a href="mailto:smartweb.pw@bk.ru">smartweb.pw@bk.ru</a></li>
                                </ul>
                            </li>
                            <li>
                                <ul class="address-text">
                                    <li><b>Сайт</b></li>
                                    <li><a href="/">kristina-strelchuk.online</a></li>
                                </ul>
                            </li>

                        </ul>
                        <ul class="social-icons social-icons-header two">
                            <li><a href="https://t.me/nikkiwest" target="_blank"> </a></li>
                            <li><a href="https://github.com/NikkiWest" target="_blank" class="fb"> </a></li>
                            <li><a href="https://www.linkedin.com/in/kristina-strelchuk-05187b1aa" target="_blank" class="in"> </a></li>
                            <li><a href="https://novosibirsk.hh.ru/resume/647013d4ff025151090039ed1f523268703564" target="_blank" class="dott"> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-12  header-left column-header-resize-height">
                        <div class="wrapper-photo">
                            <img src="/images/new/photo.jpg" alt="">
                        </div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- about -->
    <div id="about" class="about">
        <div class="col-md-6 about-left">
            <div id="owl-demo1" class="owl-carousel owl-carousel2">
                <div class="item">
                    <div class="about-left-grid">
                        <h2><span>Информация обо мне</span></h2>
                        <p>Я Fullstack Web разработчик с 3+ летним опытом. <br>
                            Комфортный стек: (PHP(Yii2), Nginx/Apache, MYSQL, Linux). <br>
                            Имею навыки
                            управления командой разработки из 5 человек. Люблю работать с новыми технологиями и сложными
                            проектами. Ценю в людях честность, ответственность и коммуникабельность.</p>
                        <ul>
                            <li><a class="a-btn-a scroll" href="#port">Проекты</a></li>
                            <li><a class="a-btn-h scroll" href="#contact">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 about-right">

        </div>
        <div class="clearfix"></div>
    </div>
    <!-- /about -->
    <!-- services -->
    <div id="services" class="services">
        <div class="container">
            <div class="service-head one text-center ">
                <h4>Что я умею</h4>
                <h3>Мои <span>навыки</span></h3>
                <span class="border two"></span>
            </div>
            <!-- services-grids -->
            <div class="wthree_about_right_grids w3l-agile">
                <div class="col-md-6 wthree_about_right_grid d-flex">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-cog"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Backend</h4>
                        <p>PHP5, PHP7 (Yii2), PHP8 (Yii3)</p>
                        <p>Python (bs4, Pandas, Django)</p>
                        <p>Паттерны проектирования</p>
                        <p>ООП</p>
                        <p>nodejs</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 wthree_about_right_grid d-flex">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-th"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Frontend</h4>
                        <p>JS, JQ, VUE</p>
                        <p>HTML/CSS</p>
                        <p>Фреймворк: Bootstrap</p>
                        <p>Верстка с Figma</p>
                        <p>БЭМ подход</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 wthree_about_right_grid d-flex">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-inbox"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Базы данных</h4>
                        <p>MYSQL, PostgreSQL</p>
                        <p>Проектирование баз данных</p>
                        <p>Администрирование баз данных</p>
                        <p>Написание сложных sql-запросов</p>
                        <p>Оптимизация sql-запросов</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 wthree_about_right_grid d-flex">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-user"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>TeamLeading</h4>
                        <p>Построение и управление циклом разработки</p>
                        <p>Управление командой</p>
                        <p>Анализ и распределение задач</p>
                        <p>Code review</p>
                        <p>Составление технической документации</p>
                        <p>Управление инцидентами (багами)</p>
                        <p>Управление конфликтами</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 wthree_about_right_grid d-flex">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-tasks"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Доп. навыки</h4>
                        <p>Чтение кода</p>
                        <p>GIT</p>
                        <p>Docker</p>
                        <p>TaskTrackers (YouTrack, Jira)</p>
                        <p>SEO-оптимизация</p>
                        <p>Стек LNMP/LAPP</p>
                        <p>Wordpress, Opencart</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 wthree_about_right_grid d-flex">
                    <div class="col-xs-4 wthree_about_right_grid_left">
                        <div class="hvr-rectangle-in">
                            <i class="glyphicon glyphicon-dashboard"></i>
                        </div>
                    </div>
                    <div class="col-xs-8 wthree_about_right_grid_right">
                        <h4>Soft Skills</h4>
                        <p>Умение учиться</p>
                        <p>Анализ рисков</p>
                        <p>Ответственность</p>
                        <p>Исполнительность</p>
                        <p>Коммуникативность</p>
                        <p>Английский: pre-intermediate</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- services-grids -->
        </div>
    </div>
    <!-- services -->
    <!--work-experience-->
    <div id="work" class="work">
        <div class="container">
            <div class="service-head text-center">
                <?php
                try {
                    $nowDate = new DateTime(date('Y-m-d'));
                    $dateStart = new DateTime('2017-06-10');
                    $interval = $nowDate->diff($dateStart);
                    $year = (int)$interval->format('%Y');
                    $mouth = (int)$interval->format('%m');
                } catch (Exception $e) {
                    $year = '3';
                    $mouth = '7';
                }
                ?>
                <h4><?= $year ?> года <?= $mouth ?> месяцев</h4>
                <h3>Опыт <span>работы</span></h3>
                <span class="border one"></span>
            </div>
            <div class="time-main w3l-agile">
                <ul class="list">
                    <li>
                        <span></span>
                        <div class="media">
                            <div class="d-flex">
                                <p>Март 2021 —<br> настоящее время</p>
                            </div>
                            <div class="media-body">
                                <h4>Pharmznanie</h4>
                                <p class="position">Програмист</p>
                                <ul class="media-duties">
                                    <li><b>Технологии</b>: Yii2/Yii3, PostgreSql/MySql, RabbitMQ, GraphQl, PHP8</li>
                                    <li>Поддержка и доработка сервисов на Yii2</li>
                                    <li>Разработка сервисов на Yii3</li>
                                    <li>Использование подхода DDD</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="media">
                            <div class="d-flex">
                                <p>Август 2020 —<br> февраль 2021</p>
                            </div>
                            <div class="media-body">
                                <h4>WebTeam</h4>
                                <p class="position">TeamLead</p>
                                <p>Проект по автоматизации загрузки рекламы на фейсбуке,
                                    разрабатывался под внутреннее пользование.
                                </p>
                                <ul class="media-duties">
                                    <li><b>Технологии</b>: Yii2, nodejs, MySQL, HTML5/CSS3/jQuery/vue.js/Bootstrap</li>
                                    <li>Постановка и распределение задач между разработчиками</li>
                                    <li>Проведение код ревью</li>
                                    <li>Выстраивание процессов по работе отдела</li>
                                    <li>Управление командой разработчиков</li>
                                    <li>Разработка и управление проектом, улучшение существующих решений</li>
                                    <li>Контроль над выполнением задач</li>
                                    <li>Разработка и проектирование баз данных (MySQL)</li>
                                    <li>Управление конфликтами</li>
                                </ul>
                                <br>
                                <h4>WebTrade</h4>
                                <p class="position">Програмист</p>
                                <p>В связи с тем, что проект по автоматизации работы с facebook в <b>WebTeam</b>
                                    был заморожен по причине смены курса направления компании (отказались от рекламы в facebook),
                                    была переведена на смежный проект по разработке сервиса аналитики продаж с
                                    wildberries
                                </p>
                                <ul class="media-duties">
                                    <li><b>Технологии</b>: Yii2, nodejs, PostgreSql, RabbitMQ, HTML5/CSS3/jQuery/Bootstrap</li>
                                    <li>разработка и проектирование сервиса по нотификации на nodejs/PostgreSql</li>
                                    <li>разработка личного кабинета для пользователей</li>
                                    <li>доработка внутренней системы администрирования, разработка интерфейсов
                                        отчетности
                                    </li>
                                    <li>работа с API, который является единственным звеном, взаимодействующим с БД</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="media">
                            <div class="d-flex">
                                <p>Май 2018 —<br> август 2020</p>
                            </div>
                            <div class="media-body">
                                <h4>PharmZnanie</h4>
                                <p class="position">Разработчик</p>
                                <ul class="media-duties">
                                    <li>Проектирование, разработка и поддержка внутренних
                                        вэб-сервисов компании
                                    </li>
                                    <li>Технологии: Yii2, MYSQL, HTML5/CSS3/jQuery/Bootstrap</li>
                                    <li> Проектирование, разработка API к сервисам компании (для
                                        клиентов-организаций)
                                    </li>
                                    <li> Проектирование, разработка и поддержка международных веб-продуктов (
                                        (Pharmznanie, Medznanie, Pharmmarket, Кэшбэкотаптек, PharmaGlobal,
                                        Pharmacourse)
                                    </li>
                                    <li> Разработка и проектирование баз данных (MySQL)</li>
                                    <li> Администрирование баз данных</li>
                                    <li> SEO-оптимизация веб-продуктов.</li>
                                </ul>
                                <p class="position">Старший разработчик с функциями Team Lead</p>
                                <ul class="media-duties">
                                    <li>Проектирование, разработка и поддержка внутренних
                                        вэб-сервисов компании (Backend: Yii2, Frontend: HTML5+CSS3+jQuery+Bootstrap4)
                                    </li>
                                    <li>Проектирование, разработка API к сервисам компании (для клиентов-организаций)
                                    </li>
                                    <li>Проектирование, разработка и поддержка международных веб-продуктов (
                                        (Pharmznanie, Medznanie, Pharmmarket, Кэшбэкотаптек, PharmaGlobal,
                                        Pharmacourse)
                                    </li>
                                    <li>Разработка и проектирование баз данных (MySQL)</li>
                                    <li>Администрирование баз данных</li>
                                    <li>SEO-оптимизация веб-продуктов</li>
                                    <li>Построение и управление циклом разработки</li>
                                    <li>Управление командой разработчиков (5 человек)</li>
                                    <li>Анализ и распределение задач</li>
                                    <li>Code review членов команды разработки</li>
                                    <li>Составление технической документации</li>
                                    <li>Управление конфликтами.</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="media">
                            <div class="d-flex">
                                <p>Ноябрь 2017 —<br>апрель 2018</p>
                            </div>
                            <div class="media-body">
                                <h4>S-lite</h4>
                                <p class="position">Web-программист</p>
                                <ul class="media-duties">
                                    <li>Разработка и доработка сайтов (CMS Wordpress, ModX, Opencart, PHP5)</li>
                                    <li>Администрирование сайтов</li>
                                    <li> Подключение сайтов к системам управления</li>
                                    <li> Проектирование и разработка БД (MySQL)</li>
                                    <li> Верстка контента - баннеры, иконки и т.д. (Photoshop, CorelDraw)</li>
                                    <li> Сопровождение проектов, работа с заказчиками</li>
                                    <li> Организация работы freelance-разработчиков.</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="media">
                            <div class="d-flex">
                                <p>Июнь 2017 —<br>сентябрь 2017</p>
                            </div>
                            <div class="media-body">
                                <h4>Аутсорсинг Маркетинга</h4>
                                <p class="position">Web-программист</p>
                                <ul class="media-duties">
                                    <li>Разработка сайтов с нуля и доработка существующих (HTML, CSS, CMS Wordpress)
                                    </li>
                                    <li>Продвижение (SEO, SMM, Яндекс.Директ)</li>
                                    <li>Администрирование сайтов</li>
                                    <li>Разработка контента для размещения на сайте</li>
                                    <li>Проектирование и разработка БД (MySQL)</li>
                                    <li>Сопровождение проектов, работа с заказчиками.</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//work-experience-->

    <!-- portfolio -->
    <div class="portfolio" id="port">
        <div class="service-head text-center">
            <h4>Портфолио</h4>
            <h3>Мои <span>работы</span></h3>
            <span class="border"></span>
        </div>
        <div class="container"><?php
            try {
                echo Portfolio::widget();
            } catch (Exception $e) {
            } ?></div>

    </div>
    <!-- //portfolio -->
    <a href="#home" id="toTop" style="display: block"> <span id="toTopHover" style="opacity: 1"> </span></a>