<?php


namespace app\models;


use yii\db\ActiveRecord;

class TypePortfolio extends ActiveRecord
{
        public static function tableName()
        {
            return '{{type_portfolio}}';
        }
}