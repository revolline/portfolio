<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class ContactForm extends ActiveRecord
{
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
            // name, email, subject and body are required
            [['name', 'email', 'message'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
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
    public function beforeValidate()
    {
        return parent::beforeValidate(); // TODO: Change the autogenerated stub
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
            $body = "<div>От кого: $this->email, $this->name</div>
                    <div>Сообщение: $this->message</div>
                    <div>Когда: $this->dt</div>";
            Yii::$app->mailer->compose()
                ->setTo([Yii::$app->params['senderEmail']])
                ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
//                ->setReplyTo([$this->email => $this->name])
                ->setSubject("Письмо с контактной формы")
                ->setTextBody($body)
                ->send();
            return true;
        }
        return false;
    }
}