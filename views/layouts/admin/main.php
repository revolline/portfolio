<?php

use backend\components\AdminMenuWidget;
use \backend\assets\AdminAsset;
use \yii\helpers\Url;
use \yii\helpers\Html;
use \common\Core;
\app\assets\AdminLteAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue sidebar-mini">
    <?php $this->beginBody() ?>

        <header class="main-header">
            <a href="<?=Url::to('/admin/') ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>LTE</span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Свернуть панель</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?=Url::to('/admin/logout') ?>">Выход</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left" style="min-height: 700px;">
            <aside class="left-side sidebar-offcanvas main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            <i class="fa fa-user-secret fa-4x"></i>
                        </div>
                        <div class="pull-left info">
                            <p><?=Yii::$app->user->identity->username ?></p>
                        </div>
                    </div>
                    <?php //echo AdminMenuWidget::widget(); ?>
                </section>
            </aside>

            <aside class="content-wrapper">
                <section class="content-header">
                    <h1>
                        <?=$this->title; ?>
                        <small><?=(isset($this->context->pageTitle))?$this->context->pageTitle:'Панель администратора'; ?></small>
                    </h1>
                </section>

                <section class="content">
                    <?php
                    //echo \backend\components\TopMenuWidget::widget(['menu_item'=>$this->context->menu_item]);
                    ?>

                    <?php
                    $fl = Yii::$app->session->getFlash('success');
                    if ($fl) {
                        foreach ($fl as $msg) {
                        ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <span><?=$msg; ?></span>
                        </div>
                    <?php
                        }
                    }
                    ?>

                    <?php
                    $fl = Yii::$app->session->getFlash('error');
                    if (is_array($fl)) {
                        foreach ($fl as $msg) {
                        ?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <span><?=$msg; ?></span>
                            </div>
                    <?php
                        }
                    }
                    Yii::$app->session->removeFlash('success');
                    Yii::$app->session->removeFlash('error');
                    ?>




                    <?= $content ?>
                    <div class="sep"></div>
                </section>
            </aside>
        </div>
    <div id="alertMessage"></div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
