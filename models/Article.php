<?php


namespace app\models;


use yii\db\ActiveRecord;

class Article extends ActiveRecord
{
        public static function tableName()
        {
            return '{{article}}';
        }

    public function rules()
    {
        return [
            [['id', 'active'], 'integer'],
            [['name', 'seo_url', 'short_desc', 'description'], 'string'],
            [['dt_create'], 'default', 'value' => null],
            [['dt_create'], 'datetime', 'format' => 'php:Y-m-d H:i:s'],
        ];
    }
}