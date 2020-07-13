<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= Alert::widget() ?>

<header class="header-new">
    <div class="container">
        <div class="top-header">
            <div class="top-nav">
                <div class="navigation">
                    <div class="logo">
                        <h1><a href="/"><span>N</span>ikkiwest</a></h1>
                    </div>
                    <div class="navigation-right">
                        <span class="menu"><img src="/images/menu.png" alt=" "></span>
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
        </div>
    </div>
</header>
<div class="container">
    <?= $content ?>
</div>
<!-- /footer -->
<div class="footer" id="contact">
    <div class="container">
        <div class="service-head one text-center">
            <h4>Свяжитесь со мной</h4>
            <h3><span>Контактные данные</span></h3>
            <span class="border two"></span>
        </div>
        <div class="mail_us">
            <div class="col-md-6 mail_left">
                <div class="contact-grid1-left">
                    <div class="contact-grid1-left1">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        <h4>Почта</h4>
                        <ul>
                            <li><a href="mailto:info@example.com">info@example1.com</a></li>
                            <li><a href="mailto:info@example.com">info@example1.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="contact-grid1-left">
                    <div class="contact-grid1-left1">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                        <h4>Телефон</h4>
                        <ul>
                            <li>8-913-787-99-68</li>
                        </ul>
                    </div>
                </div>
                <div class="contact-grid1-left">
                    <div class="contact-grid1-left1">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        <h4>Местонахождение</h4>
                        <ul>
                            <li>Адрес: Октябрьский район</li>
                            <li>Россия, Новосибирск</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-6 mail_right">
                <form id="formSend" method="post">
                    <input type="text" name="name" value="Введите имя" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Имя';}" required="">
                    <input type="email" name="email" value="Введите почту" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Email';}" required="">
                    <input type="text" name="phone" value="Введите мобильный телефон" onfocus="this.value = '';"
                           onblur="if (this.value == '') {this.value = 'Мобильный телефон';}" required="">
                    <textarea name="Сообщение..." onfocus="this.value = '';"
                              onblur="if (this.value == '') {this.value = 'Сообщение...';}"
                              required="">Сообщение...</textarea>
                    <input type="submit" value="Отправить" onclick="$('#formSend').submit(); return false;">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="copy_right text-center">
            <p>&copy; <?= date('Y'); ?> Дизайн <a href="http://w3layouts.com/" target="_blank">W3layouts.</a>
            </p>
            <ul class="social-icons two">
                <li><a href="https://t.me/nikkiwest" target="_blank"> </a></li>
                <li><a href="https://github.com/NikkiWest" class="fb"> </a></li>
                <li><a href="#" class="in"> </a></li>
                <li><a href="https://novosibirsk.hh.ru/resume/647013d4ff025151090039ed1f523268703564" class="dott"> </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- //footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
