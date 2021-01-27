<?php


namespace app\models;


use Throwable;
use yii\base\InvalidConfigException;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;
use yii\db\StaleObjectException;

/**
 *
 * @property-read mixed $category
 * @property-read null $categoryName
 * @property-read null $categoryId
 * @property int $id [int(11)]
 * @property string $name [varchar(500)]
 * @property string $seo_url [varchar(100)]
 * @property string $short_desc [varchar(500)]
 * @property string $description
 * @property int $active [int(11)]
 * @property string $dt_create [date]
 */
class Article extends ActiveRecord
{
    public $category_id;

    public static function tableName()
    {
        return '{{article}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => SluggableBehavior::className(),
                'attribute' => 'name',
                'slugAttribute' => 'seo_url',
                'immutable' => true
            ],
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'dt_create'
                ],
                'value' => new Expression('NOW()'),
            ]

        ];
    }

    public function rules()
    {
        return [
            [['id', 'active'], 'integer'],
            [['name', 'seo_url', 'short_desc', 'description'], 'string'],
            [['name', 'description', 'category_id'], 'required'],
            [['dt_create'], 'default', 'value' => null],
            [['dt_create'], 'date', 'format' => 'php:Y-m-d'],
            [['category_id'], 'safe']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'Номер',
            'name' => 'Наименование',
            'seo_url' => 'Ссылка на новость',
            'dt_create' => 'Дата создания',
            'short_desc' => 'Короткое описание',
            'description' => 'Описание',
            'active' => 'Активность',
            'category_id' => 'Категория'
        ];
    }

    public function beforeValidate()
    {
        return parent::beforeValidate();
    }

    public function getCategory()
    {
        try {
            return $this->hasMany(Category::class, ['id' => 'category_id'])
                ->viaTable('article_category', ['article_id' => 'id']);
        } catch (InvalidConfigException $e) {
            return null;
        }
    }

    public function getCategoryName()
    {
        return (isset($this->category[0]->name)) ? $this->category[0]->name : null;
    }

    public function getCategoryId()
    {
        return (isset($this->category[0]->id)) ? $this->category[0]->id : null;
    }

    public function afterSave($insert, $changedAttributes)
    {
        $ArticleCategory = ArticleCategory::findOne(['article_id' => $this->id]);
        if (is_object($ArticleCategory)) {
            try {
                $ArticleCategory->delete();
            } catch (StaleObjectException $e) {
                $e->getMessage();
            } catch (Throwable $e) {
                $e->getMessage();
            }
        }
        $ArticleCategory = new ArticleCategory(['article_id' => $this->id, 'category_id' => $this->category_id]);
        $ArticleCategory->save();
        parent::afterSave($insert, $changedAttributes);
    }
}