<?php

namespace app\models;


/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $seo_url
 * @property string|null $seo_desc
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'seo_url'], 'string', 'max' => 100],
            [['seo_desc'], 'string', 'max' => 500],
            [['id'], 'integer']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'seo_url' => 'Seo Url',
            'seo_desc' => 'Seo Desc',
        ];
    }
}
