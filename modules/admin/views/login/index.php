<div class="alert alert-danger">Для входа в панель администрирования требуется войти</div>

<?php $form = \yii\widgets\ActiveForm::begin(['enableAjaxValidation' => true,]);
echo $form->field($model, 'username')->input('text');
echo $form->field($model, 'password')->input('text');
echo \yii\helpers\Html::submitButton("Войти", ['class' => "submit"]);
\yii\widgets\ActiveForm::end();
?>