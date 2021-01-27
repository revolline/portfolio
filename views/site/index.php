<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
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
                        <p>PHP5, PHP7 (Yii2)</p>
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
                        <p>MYSQL, MSSQL, PostgreSQL</p>
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
                        <p>Tasktrackers (YouTrack, Jira)</p>
                        <p>SEO-оптимизация</p>
                        <p>Стек LNMP</p>
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
                        <p>Английский (B1)</p>
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
                                <p>Ноябрь 2020 —<br> настоящее время</p>
                            </div>
                            <div class="media-body">
                                <h4>WebTrade</h4>
                                <p class="position">Програмист</p>
                                <p>В связи с тем, что проект по автоматизации работы с facebook в WebTeam
                                    был заморожен по причине смены курса направления рекламы (отказались от facebook),
                                    была переведена на соседний проект по разработке сервиса аналитик продаж с
                                    wildberries
                                </p>
                                <ul class="media-duties">
                                    <li>Технологии: Yii2, nodejs, PostgreSql, RabbitMQ, HTML5/CSS3/jQuery/Bootstrap</li>
                                    <li>разработка и проектирование сервиса по нотификации на nodejs/PostgreSql</li>
                                    <li>разработка личного кабинета для пользователей</li>
                                    <li>доработка внутренней системы администрирования, разработка интерфейсов
                                        отчетности
                                    </li>
                                    <li>работа с АПИ, который является единственным звеном, взаимодействующим с БД</li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span></span>
                        <div class="media">
                            <div class="d-flex">
                                <p>Август 2020 —<br> ноябрь 2020</p>
                            </div>
                            <div class="media-body">
                                <h4>WebTeam</h4>
                                <p class="position">TeamLead</p>
                                <p>Проект по автоматизации загрузки рекламы на фейсбуке,
                                    разрабатывался под внутреннее пользование.
                                </p>
                                <ul class="media-duties">
                                    <li>Технологии: Yii2, nodejs, MySQL, HTML5/CSS3/jQuery/vue.js/Bootstrap</li>
                                    <li>Постановка и распределение задач между разработчиками</li>
                                    <li>Проведение код ревью</li>
                                    <li>Выстраивание процессов по работе отдела</li>
                                    <li>Управление командой разработчиков</li>
                                    <li>Разработка и управление проектом, улучшение существующих решений</li>
                                    <li>Контроль над выполнением задач</li>
                                    <li>Разработка и проектирование баз данных (MySQL)</li>
                                    <li>Управление конфликтами</li>
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
        <div class="container"><?= \app\widgets\Portfolio::widget() ?></div>

    </div>
    <!-- //portfolio -->
<?php
/*
 * <!-- top-grids -->
<div class="blog" id="blogs">
    <div class="container">
        <div class="service-head text-center">
            <h4>Статьи</h4>
            <h3>Мой <span>блог</span></h3>
            <span class="border one"></span>
        </div>
        <div class="news-grid w3l-agile">
            <div class="col-md-6 news-img">
                <a href="#" data-toggle="modal" data-target="#myModal1"> <img src="/images/b1.jpg" alt=" "
                                                                              class="img-responsive"></a>

            </div>
            <div class="col-md-6 news-text">
                <h3><a href="#" data-toggle="modal" data-target="#myModal1">HERE GOES AN AWESOME BLOG TITLE</a></h3>
                <ul class="news">
                    <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                    <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                    <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                </ul>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                    consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem
                    ipsum quia dolor sit amet.</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal">Read
                    More</a>

            </div>

            <div class="clearfix"></div>
        </div>
        <div class="news-grid">

            <div class="col-md-6 news-text two">
                <h3><a href="#" data-toggle="modal" data-target="#myModal1">HERE GOES AN AWESOME BLOG TITLE</a></h3>
                <ul class="news">
                    <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                    <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                    <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                </ul>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                    consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem
                    ipsum quia dolor sit amet.</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal">Read
                    More</a>

            </div>
            <div class="col-md-6 news-img two">
                <a href="#" data-toggle="modal" data-target="#myModal1"> <img src="/images/b2.jpg" alt=" "
                                                                              class="img-responsive"></a>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="news-grid">
            <div class="col-md-6 news-img">
                <a href="#" data-toggle="modal" data-target="#myModal1"> <img src="/images/b3.jpg" alt=" "
                                                                              class="img-responsive"></a>

            </div>
            <div class="col-md-6 news-text">
                <h3><a href="#" data-toggle="modal" data-target="#myModal1">HERE GOES AN AWESOME BLOG TITLE</a></h3>
                <ul class="news">
                    <li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
                    <li><i class="glyphicon glyphicon-comment"></i> <a href="#">2 Comments</a></li>
                    <li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
                    <li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
                </ul>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                    consequatur aut perferendis doloribus asperiores repellat. Neque porro quisquam est, qui dolorem
                    ipsum quia dolor sit amet.</p>
                <a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal">Read
                    More</a>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- top-grids -->
 */
?>

    <a href="#home" id="toTop" style="display: block"> <span id="toTopHover" style="opacity: 1"> </span></a>

<?php
/*
 * modal
 *
 * <!-- modal portfolio -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Портфолио</h3>
                        <img src="/images/pic4.jpg" class="img-responsive img-centered" alt="">
                        <p>1 элемент</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END modal portfolio -->
 *
 *
 * <!-- /blog-pop-->
<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog about" role="document">
        <div class="modal-content about">
            <div class="modal-header">
                <button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body about">
                <div class="about">

                    <div class="about-inner">

                        <img src="/images/b3.jpg" alt="about"/>
                        <h4 class="tittle">A Fews words about us</h4>
                        <p>Lorem ipsum dolor sit amet Integer gravida,Lorem ipsum dolor sit amet Integer gravida
                            velit,Ming sits in the corner the whole day. She's into crochet. quis dolor
                            tristiqumsan.Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                            anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. velit
                            quis dolor tristiqumsan.</p>
                        <p>Lorem ipsum dolor sit amet. Integer gravida velit quis dolor tristiqumsan.anteposuerit
                            litterarum formas humanitatis per seacula amet Integer gravida velit. </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- //blog-pop-->
 */