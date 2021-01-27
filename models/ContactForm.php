<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;

/**
 * @property int $id
 * @property string|null $name
 * @property string|null $dt
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $message
 */
class ContactForm extends ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'dt'
                ],
                'value' => new Expression('NOW()'),
            ]
        ];
    }

    public static function tableName()
    {
        return 'contact';
    }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'message'], 'required'],
            ['email', 'email'],
            [['phone', 'name'], 'string'],
            ['phone', 'match',
                'pattern' => '/^(8)(\d{3})(\d{3})(\d{2})(\d{2})/',
                'message' => 'Телефон должен быть в формате 8XXXXXXXXXX'],
        ];
    }


    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Почта',
            'phone' => 'Телефон',
            'message' => 'Сообщение',
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        if ($insert) {
            $this->send();
        }
    }

    public function send()
    {
        if ($this->validate()) {
            $phone = (!empty($this->phone)) ? "<div>Телефон: $this->phone</div>" : "";
            $body = "<div>От кого: $this->email, $this->name.</div>
                    $phone
                    <div>Сообщение: $this->message</div>
                    <div>Когда: $this->dt</div>";
            Yii::$app->mailer->compose()
                ->setTo([Yii::$app->params['adminEmail']])
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                ->setSubject("Письмо с контактной формы")
                ->setHtmlBody($body)
                ->send();
            return true;
        }
        return false;
    }
}
