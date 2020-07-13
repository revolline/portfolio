<?php


namespace app\widgets;


use app\models\ContactForm;
use yii\base\Widget;

use  Yii;

class Contact extends Widget
{
        public function run()
        {
            $model = new ContactForm();
            return $this->render('contact', ['model' => $model]);
        }
}