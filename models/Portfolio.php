<?php


namespace app\models;


use yii\db\ActiveRecord;
use yii\helpers\Url;

class Portfolio extends ActiveRecord
{

        public static function tableName()
        {
            return '{{portfolio}}';
        }

    public function getType()
    {
        return $this->hasMany(Type::className(), ['id' => 'id_type'])
            ->viaTable('type_portfolio', ['id_portfolio' => 'id']);
    }

    public function getTypePortfolio()
    {
        return $this->hasMany(TypePortfolio::className(), ['id_portfolio' => 'id']);
    }

    /**
     * @return string
     */
    public function getImagesSmallUrl()
    {
        return Url::to(\Yii::getAlias('@storageUrl').'/portfolio/small/' . $this->id. '.png');
    }

    public function getNext() {
        $next = $this->find()->where('id=:id')
            -> addParams([':id'=>$this->id + 1])
            ->orderBy('id desc')->one();
        if (isset($next))
            return $next;
        else return null;
    }

    public function getPrev() {
            $prev = $this->find()->where('id=:id')
                ->addParams([':id'=>$this->id - 1])
                ->orderBy('id asc')->one();
            if (isset($prev)) {
                return  $prev;
            } else return null;
    }

    public function getLink()
    {
        return "/storage/web/portfolio/full/". $this->id. ".png";
    }

    /**
     * @return string
     */
//    public function getImagesPath()
//    {
//        return \Yii::getAlias('@storage').'/portfolio/small/'.$this->id . '.png';
//    }


}