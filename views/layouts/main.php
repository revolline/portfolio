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
<?=$this->render('_footer');?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
