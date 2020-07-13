<?php


namespace app\modules\admin\controllers;


use app\models\LoginForm;
use yii\web\Controller;

class LoginController extends Controller
{
        public function actionIndex()
        {
            $model = new LoginForm();
            return $this->render('index', ['model' => $model]);
        }
}