<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'short_desc',
            'dt_create:date',
            'actions' => [
                            'class' => \yii\grid\ActionColumn::className(),
                            'buttons' => [
                                'view' =>
                                    function ($url, $model, $key) {
                                        return Html::a('<i class="fa fa-eye text-primary"></i>', $url, ['class' => 'btn btn-xs btn-default']);
//
                                    },
                                'update' =>
                                    function ($url, $model, $key) {
                                        return Html::a('<i class="fa fa-pencil text-primary"></i>', $url, ['class' => 'btn btn-xs btn-default']);
                                    },
                                'delete' =>
                                    function ($url, $model, $key) {
                                        return Html::a('<i class="fa fa-remove text-primary"></i>', $url, ['class' => 'btn btn-xs btn-default']);
                                    },
                            ],
                            'template' => '{view} {update} {delete}',
                            'headerOptions' => [
                                'class' => 'text-center'
                            ],
                            'contentOptions' => [
                                'class' => 'text-center',
                                'nowrap' => 'nowrap'
                            ],
                        ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
