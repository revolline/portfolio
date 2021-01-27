<?php

namespace app\models;

use Yii;
use yii\base\Exception;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 *
 * @property-read mixed $authKey
 * @property-write mixed $password
 * @property-read mixed $id
 * @property string $username [varchar(400)]
 * @property string $password_hash [varchar(500)]
 * @property string $name [varchar(400)]
 * @property string $auth_key [varchar(500)]
 * @property string $email [varchar(500)]
 * @property string $created_at [datetime]
 * @property int $active [int(1)]
 * @property string $token [varchar(500)]
 */
class User extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{user}}';
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'active' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['token' => $type, 'active' => 1]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'active' => 1]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    public function setPassword($password)
    {
        try {
            $this->password_hash = Yii::$app->security->generatePasswordHash($password);
        } catch (Exception $e) {
            $this->password_hash = null;
        }
    }
}
