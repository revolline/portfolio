<?php


namespace app\controllers;


use app\assets\AppAsset;
use app\models\Portfolio;
use app\models\Type;
use yii\web\Controller;

class PortfolioController extends Controller
{
        public function actionIndex()
        {
            return $this->render('index');
        }

        public function actionView($slug)
        {
            $this->view->registerCssFile('/css/portfolio.css', ['depends'=>[AppAsset::className()]]);
            $this->view->registerCssFile('/lib/linericon/style.css', ['depends'=>[AppAsset::className()]]);
            $portfolio = Portfolio::findOne(['seo_url' => $slug]);
            return $this->render('view', ['portfolio' => $portfolio]);
        }
}