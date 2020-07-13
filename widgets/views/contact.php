<?php $form = \yii\widgets\ActiveForm::begin(['options' => ['id' => 'formSend'],
    'action' => ['site/send'],
    //'enableAjaxValidation' => true
]) ?>
<?php
echo $form->field($model, 'name')->input('text', ['placeholder' => 'Имя', 'class' => ""])->label(false);
echo $form->field($model, 'email')->input('email', ['placeholder' => 'Почта','class' => ""])->label(false);
echo $form->field($model, 'phone')->input('text', ['placeholder' => 'Мобильный телефон','class' => ""])->label(false);
echo $form->field($model, 'message')->textarea(['placeholder' => 'Сообщение...','class' => ""])->label(false);
echo \yii\helpers\Html::submitButton("Отправить", ['class' => "submit"]);
?>
<?php \yii\widgets\ActiveForm::end();?>
<div id ="blockSuccessOrder" style="display: none">
    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
     <p>Спасибо за ваше обращение!</p>
    <p>Я свяжусь с Вами в ближайшее время по указанным контактам</p>
</div>
<?php
$script = <<< JS
        $('body').on('beforeSubmit', 'form#formSend', function () {
            var form = $(this);
            // return false if form still have some validation errors
            if (form.find('.has-error').length)  return false;
            // submit form
            $.ajax({
            url    : form.attr('action'),
            type   : 'POST',
            data   : form.serialize(),
            success: function (response) 
            {
                toastr.options.newestOnTop = false;
                if (response.success == true){
                     toastr.success(response.message)
                      $("#formSend").hide();
                      $("#blockSuccessOrder").show();
                }else {
                    if (response.error){
                        $.each(response.error, function( i, value ) {
                             toastr.error(value);
                        });
                    }else toastr.error(response.message);
                } 
               
            },
            error  : function () 
            {
               toastr.error('Есть неполадки в работе сайта. Попробуйте позднее')
            }
            });
            return false;
         });

JS;
$this->registerJs($script, yii\web\View::POS_END);
?>
