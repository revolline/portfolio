<?php

namespace app\modules\admin;

use app\assets\AdminLteAsset;
use backend\modules\admin\assets\AdminAsset;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function init()
    {
        parent::init();
//        \Yii::$app->view->on(
//            \yii\base\View::EVENT_BEFORE_RENDER,
//            function ($event) {AdminLteAsset::register($event->sender);});
    }
}
