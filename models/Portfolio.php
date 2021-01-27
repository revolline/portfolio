<?php


namespace app\models;


use yii\base\InvalidConfigException;
use yii\db\ActiveRecord;
use yii\helpers\Url;

/**
 * @property int $id
 * @property string|null $name
 * @property string|null $dt_begin
 * @property string|null $txt
 * @property string|null $task
 * @property string|null $url
 * @property string|null $seo_url
 * @property int $flag_work_now
 * @property-read null $next
 * @property-read mixed $typePortfolio
 * @property-read null $prev
 * @property-read string $link
 * @property-read mixed $type
 * @property-read string $imagesSmallUrl
 */
class Portfolio extends ActiveRecord
{

    public static function tableName()
    {
        return '{{portfolio}}';
    }

    public function getType()
    {
        try {
            return $this->hasMany(Type::class, ['id' => 'id_type'])
                ->viaTable('type_portfolio', ['id_portfolio' => 'id']);
        } catch (InvalidConfigException $e) {
            return null;
        }
    }

    public function getTypePortfolio()
    {
        return $this->hasMany(TypePortfolio::class, ['id_portfolio' => 'id']);
    }

    /**
     * @return string
     */
    public function getImagesSmallUrl()
    {
        return Url::to(\Yii::getAlias('@storageUrl') . '/portfolio/small/' . $this->id . '.png');
    }

    public function getNext()
    {
        $next = $this->find()->where('id=:id', [':id' => $this->id + 1])->orderBy('id desc')->one();
        if (isset($next))
            return $next;
        else return null;
    }

    public function getPrev()
    {
        $prev = $this->find()->where('id=:id', [':id' => $this->id - 1])->orderBy('id asc')->one();
        if (isset($prev)) {
            return $prev;
        } else return null;
    }

    public function getLink()
    {
        return "/storage/web/portfolio/full/" . $this->id . ".png";
    }

}