<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $opt = [];
    $opt['id'] = 'category_id';
    $opt['class'] = 'form-control';
   // $opt['multiple'] = 'multiple';
    $opt['prompt'] = '-- Выберите категорию --';
    //var_dump($model);die;
    ?>
    <?=$form->field($model, 'categoryId')
        ->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Category::find()->all(), 'id', 'name'),  $opt) ;?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seo_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'short_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->widget(\dosamigos\tinymce\TinyMce::className());?>

    <?= $form->field($model, 'active')->checkbox() ?>

    <div class="col-sm-4">
        <?= $form->field($model, 'dt_create')->textInput(['type' => 'date']) ?>
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
