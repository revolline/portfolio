<?php


namespace app\controllers;


use app\assets\AppAsset;
use app\models\Portfolio;
use app\models\Type;
use yii\base\InvalidConfigException;
use yii\web\Controller;

class PortfolioController extends Controller
{
        public function actionIndex()
        {
            return $this->render('index');
        }

        public function actionView($slug)
        {
            try {
                $this->view->registerCssFile('/css/portfolio.css', ['depends' => [AppAsset::class]]);
                $this->view->registerCssFile('/lib/linericon/style.css', ['depends'=>[AppAsset::class]]);
            } catch (InvalidConfigException $e) {
            }
            $portfolio = Portfolio::findOne(['seo_url' => $slug]);
            return $this->render('view', ['portfolio' => $portfolio, 'nextWork' => $portfolio->getNext()]);
        }
}