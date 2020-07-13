<?php


namespace app\widgets;


use app\models\Type;
use yii\base\Widget;

class Portfolio extends Widget
{
    public function run()
    {
        $type_id = \Yii::$app->request->get('type', 'all');
        $where = ($type_id != 'all') ? ['id_type' => $type_id] : "";
        $data = \app\models\Portfolio::find()
            ->leftJoin('type_portfolio', 'type_portfolio.id_portfolio = portfolio.id')
            ->where($where)->all();
        $types = Type::find()->all();
        return $this->render('portfolio',
            ['data' => $data, 'types' => $types, 'type_id' => $type_id]);
    }
}